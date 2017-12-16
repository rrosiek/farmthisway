@extends('layouts.main')

@section('body')

<div class="container">
    <div class="row text-center">
        <div class="col-md-4">
            <h2>10 Week CSA</h2>
            <h3><span class="label label-success">{{ $products['10']['priceFormatted'] }}</span></h3>
            <p>June 6th through October 10th, pickup every other Wednesday @ the farm</p>
        </div>
        <div class="col-md-4">
            <h2>15 Week CSA</h2>
            <h3><span class="label label-success">{{ $products['15']['priceFormatted'] }}</span></h3>
            <p>1/4 share, June 7th through October 13th, pickup Saturdays @ Hamburg Market</p>
        </div>
        <div class="col-md-4">
            <h2>20 Week CSA</h2>
            <h3><span class="label label-success">{{ $products['20']['priceFormatted'] }}</span></h3>
            <p>May 30th through October 10th, pickup every Wednesday @ the farm</p>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-md-4 col-md-offset-4">
            <a class="btn btn-primary btn-lg btn-block" href="{!! route('csa.join') !!}">PURCHASE</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-9">
            <h1>What We're About</h1>
            <hr>
            <p>
                We are one of the fastest growing CSAs in the Buffalo, NY area.  One benefit of becoming a member of the Farmthisway CSA is you have an opportunity to form relationships with the people who grow your food.  As Marty says, "You get a chance to look the farmer in the eye."  Food is such an essential and enjoyable part of our lives, it makes good sense to know and trust the people who produce it.
            </p>

            <h2>The Farmers</h2>
            <h3>Marty</h3>
            <p>
                Despite the fact he's a first generation farmer, farming seems to be in Marty's blood.  When he was just a little boy seated around the dinner table with his family, he announced to everyone he was going to grow up to be a farmer.  Of course, no one believed him, but Marty isn't the kind of person who lets his dreams pass him by.  After 20 years of successful farming, it's pretty clear Marty chose the right career path.
            </p>
            <h3>Carolyn</h3>
            <p>
                Take a look at the market displays Carolyn creates, and you'll see she has an artistic flair and an eye for beauty.  Carolyn finds ways to express her creative side by growing incredible mums and geraniums that burst with vivid colors, artfully arranging packages of heirloom tomatoes, and crafting absolutely gorgeous holiday wreathes.  When she isn't tending to the artistic side of things, you'll find her knee deep in the dirty work of the farm.  Actually, you're just as likely to find her driving the tractor or tinkering with a motor as you are to find her tending the flowers.
            </p>
            <h3>The Family</h3>
            <p>
                Marty and Carolyn have been married for over 30 years.  A big reason they decided to give farming a shot was they believed a farm would be a great place to raise a family.  Ask them about any one of their three children, Caitlyn, Eric, or Courtney, and you'll clearly see how proud they are of the fine young adults they've raised.  By far, their kids are the crop they take the most pride in, and the one that has always been the most important.
            </p>

            <h2>The Farm</h2>
            <p>
                The farm can be understood in two ways.  One way is in technical terms.  20 acres.  100 additional rented acres under cultivation.  Fertile soil.  25 different crops grown.  6 greenhouses.  1 irrigation pond.  1 vine-covered barn.
            </p>
            <p>
                These numbers and statistics only hint at what the farm is really like.  To really get to know the farm, you need to look at it another way.  Imagine walking the farm road at harvest time.
            </p>
            <p>
                The intoxicating perfume of ripening Concord grapes lingers in the air.  The vine-covered barn catches your eye, and you see it's bursting with produce.  Butternut, acorn, white acorn, buttercup, and festival squash overflow from bushel baskets.  Multicolored peppers and heirloom tomatoes, freshly picked, stand ready to be loaded for market.
            </p>
            <p>
                Passing the barn and walking the farm road just a little further you'll come upon the mums.  It's impossible to miss these.   Some of the mums are so big it's difficult to wrap your arms around them, and the blossoms on each plant seem innumerable.
            </p>
            <p>
                Further on down the road you'll pass the irrigation pond where you might see a Great Blue Heron take flight.  Then, nestled between acres of vineyards, you'll come to the tomato fields, the vines heavy-laden with ripe heirloom tomatoes.  And this is only one little slice of the farm.
            </p>
            <p>
                Marty and Carolyn's farm isn't the type of place that numbers and statistics do justice to.  It isn't an industrial farm planted in monoculture.  It is a small, diverse family farm; a place where hard-working people and rich soil produce an astounding variety of delicious food.
            </p>

            <h1>Our CSA</h1>
            <hr>
            <p>
                Marty and Carolyn have been farming independently for almost 20 years. During that time, their produce has been available at the Hamburg Farmers' Market on Saturdays and at their roadside stand in Brant. Marty and Carolyn have also grown for the Eden Valley Growers Co-Op, where they were named 2011 Growers of the Year.
            </p>
            <p>
                The farm uses IPM practices on its crops. Some of their crops are totally organic. For the rest Integrated Pest Management practices are used. This is like when a doctor treats a patient with the least invasive procedure. Usually the crops grow and flourish naturally, but if a pest or a disease threatens the crop, then treatments may be applied. Care is taken to use the smallest amount possible for the shortest possible time to sustain crop health.
            </p>

            <hr>

            <div class="row">
                <div class="col-md-6">
                    <h2>Partners</h2>
                    <p>
                        First, when you become a member of Farmthisway you become, in a very real way, a partner with Marty and Carolyn. Having member support means Marty and Carolyn can grow with the confidence that they have your backing and their produce will find a market. You also will be able to provide input into the type of crops the farm will grow in the future.
                    </p>
                    <h2>Produce</h2>
                    <p>
                        Your partnership and upfront investment will be rewarded with produce, and lots of it! During a typical harvest week you might receive heirloom tomatoes, sweet corn, multiple varieties of peppers, and other vegetables (for a full list, see our bushel). You won't just receive one of each either. A Farmthisway membership will supply all of your vegetable needs for the week, and you'll probably have more than enough to share and preserve too.
                    </p>
                    <h2>Pick Up</h2>
                    <p>
                        Pick up is at the farm in Brant between 9:00 AM and 6:00 PM. Additional pick up can be done on Wednesdays at the Blasdell market location, however you must notify Farm This Way. If you are unable to pick up a week's produce, you have some options. Someone else can pick up your share, or we will donate it to our local food pantry in your name.
                    </p>
                    <p>
                        <a data-toggle="modal" data-target="#serviceModal" href="#">Click here</a> to see our service area in Western New York.
                    </p>
                </div>
                <div class="col-md-6">
                    <h2>Pricing</h2>
                    <p>
                        The upfront price of any CSA subscription may make you flinch a bit. If you think of it as $35 - $45 a week for all of your produce, it may seem a little less daunting. Understand, though, the amount of produce you will receive on a weekly basis will be well worth the money you invest. Marty and Carolyn always deliver value.
                    </p>
                    <p>
                        If price is an issue, consider splitting a membership with your friends, neighbors, or co-workers. There will be enough food to have plenty for yourself, even if you split a share. If you do this, you’ll also get the chance to exchange recipes and ideas for preparing the week’s produce with the people you split the membership with.
                    </p>
                        Additionally, preserving some of your produce each week by canning or freezing will allow you to reduce your food costs for the rest of the year, offsetting the upfront cost of membership. This also allows you to enjoy the taste of delicious produce year round, and freezing and canning are actually very easy.
                    </p>
                    <p>
                        Finally, as partners in the farm, please know that the price of the share is what Marty and Carolyn have determined as fair so they can make an honest living. Marty and Carolyn farm because they love it and it excites them. They’re not in farming to get rich.
                    </p>
                </div>
            </div>

            <hr>

            <h2>Workthisway</h2>
            <p>
                If you’ve ever thought that working on a farm might be fun, perhaps this is the year you should come to work for Marty and Carolyn. If you’re willing to work hard and enjoy being outside, you might find farm work satisfying. If you are willing to be consistent, Marty and Carolyn are willing to be flexible with your working hours.
            </p>
            <blockquote>
                <p>
                    "Last year my wife and I stopped by the farm to pick up some produce for dinner. While we were there, Marty mentioned he needed some help in the field. We jumped at the opportunity and found we loved the various types of work we did. The fresh air and physical nature of the work made the time rush by.
                </p>
                <p>
                    When we first began working on the farm, a co-worker said, 'When you work for Marty and Carolyn, you pretty much become part of the family.' We found that to be true too."
                </p>
                <footer>Jeff and Suzie, Field Workers</footer>
            </blockquote>
            <p>
                To discuss employment opportunities please <a href="{!! route('contact') !!}">contact Marty or Carolyn</a>.
            </p>
        </div>
        <div class="col-md-3">
            @include('partials.sidebar')
        </div>
    </div>
</div>

<div class="modal fade" id="serviceModal" tabindex="-1" role="dialog" aria-labelledby="serviceModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title" id="myModalLabel">Western New York Service Area</h3>
            </div>
            <div class="modal-body">
                <img src="/images/csa_service_area.png">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@stop
