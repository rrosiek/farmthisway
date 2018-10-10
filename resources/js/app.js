require('./bootstrap');

const emailValidate = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
const phoneValidate = /^[0-9]{3}-[0-9]{3}-[0-9]{4}$/;
let buyCsa = {};

buyCsa.stripe = Stripe(window.Laravel.stripeKey);
buyCsa.stripeElements = buyCsa.stripe.elements();
buyCsa.frm = $('form#purchaseCsa');
buyCsa.purchaseBtn = buyCsa.frm.find('button[type="submit"]');
buyCsa.firstName = buyCsa.frm.find('#firstName');
buyCsa.lastName = buyCsa.frm.find('#lastName');
buyCsa.email = buyCsa.frm.find('#email');
buyCsa.phone = buyCsa.frm.find('#phone');
buyCsa.cardValid = false;
buyCsa.errorTxt = '';
buyCsa.paymentErrors = $('#paymentErrors');

buyCsa.creditCard = buyCsa.stripeElements.create('card', {
    hidePostalCode: false,
    style: {
        base: {
            iconColor: '#00355f',
            color: '#32315e',
            fontWeight: 400,
            fontFamily: '"Raleway", -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Helvetica Neue", "Helvetica", "Arial", sans-serif',
            fontSize: '16px',
            '::placeholder': {
                color: '#cfd7df',
            }
        }
    }
});

buyCsa.creditCard.mount('#cardElement');
buyCsa.creditCard.on('change', event => buyCsa.cardValid = event.complete);

buyCsa.frm.on('submit', event => {
    event.preventDefault();

    if (!buyCsa.firstName.val()) {
        buyCsa.paymentErrors.text('You must enter your first name.');
        buyCsa.paymentErrors.removeClass('hidden');

        return;
    }

    if (!buyCsa.lastName.val()) {
        buyCsa.paymentErrors.text('You must enter your last name.');
        buyCsa.paymentErrors.removeClass('hidden');

        return;
    }

    if (!emailValidate.test(buyCsa.email.val())) {
        buyCsa.paymentErrors.text('Please enter a valid e-mail address.');
        buyCsa.paymentErrors.removeClass('hidden');

        return;
    }

    if (!phoneValidate.test(buyCsa.phone.val())) {
        buyCsa.paymentErrors.text('You must enter a valid phone number (i.e. 716-555-1234)');
        buyCsa.paymentErrors.removeClass('hidden');

        return;
    }

    if (!buyCsa.cardValid) {
        buyCsa.paymentErrors.text('Payment card is invalid, please enter an acceptable payment method.');
        buyCsa.paymentErrors.removeClass('hidden');

        return;
    }

    buyCsa.paymentErrors.addClass('hidden');
    buyCsa.purchaseBtn.prop('disabled', true).text('Please wait...');

    buyCsa.stripe.createToken(buyCsa.creditCard, {
        name: buyCsa.firstName.val() + ' ' + buyCsa.lastName.val(),
        currency: 'usd',
    }).then(result => {
        if (result.token) {
            $.ajax({
                type: 'post',
                url: buyCsa.frm.prop('action'),
                data: {
                    '_token': window.Laravel.csrfToken,
                    brand: result.token.card.brand,
                    email: buyCsa.email.val(),
                    lastFour: result.token.card.last4,
                    name: buyCsa.firstName.val() + ' ' + buyCsa.lastName.val(),
                    phone: buyCsa.phone.val(),
                    token: result.token.id,
                },
                success: () => {
                    window.location = '/csa/thankyou';
                },
                error: () => {
                    buyCsa.paymentErrors.text('There was a problem processing your order, please try again later.');
                    buyCsa.paymentErrors.removeClass('hidden');
                    buyCsa.purchaseBtn.prop('disabled', false).text('Complete Order');
                }
            });
        } else if (result.error) {
            buyCsa.paymentErrors.text(result.error.message);
            buyCsa.paymentErrors.removeClass('hidden');
            buyCsa.purchaseBtn.prop('disabled', false).text('Complete Order');
        }
    });
});
