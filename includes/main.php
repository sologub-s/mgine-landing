<?php require_once 'header.php'; ?>

<?php require_once 'section-title.php'; ?>

    <section class="section2">
        <div class="container bgs">
            <div class="item left"></div>
            <div class="item right"></div>
        </div>
        <div class="container content-wrap">
            <div class="item left">
                <a class="moreLink" href="<?php echo $publishersPageLink; ?>">
                    Publishers
                    <svg aria-hidden="true">
                        <use xlink:href="imgs/svg/icons.svg#triangleIco"></use>
                    </svg>
                </a>
            </div>
            <div class="item right">
                <a class="moreLink" href="<?php echo $advertisersPageLink; ?>">
                    Advertisers
                    <svg aria-hidden="true">
                        <use xlink:href="imgs/svg/icons.svg#triangleIco"></use>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <section class="section1 pb-0">
        <a id="publishers-info" class="beforeContentAnchor"></a>
        <div class="container">
            <h2>Publishers</h2>
            <div class="content_box">
                <ul class="bullet_list">
                    <li><strong>No delay payout:</strong> Mgine got a perfect history of payouts done in a timely
                        manner
                    </li>
                    <li><strong>On-demand ad campaigns:</strong> If you're looking for exact campaign - our managers
                        will find it for you with highest payouts in the market
                    </li>
                    <li><strong>Expert support staff:</strong> Our experienced support managers are up 24/7 to help
                        you with all stages of our cooperation (setting up, selecting campaigns, getting a payout,
                        etc.)
                    </li>
                    <li><strong>Hourly updated campaign list:</strong> We're making sure that every campaign that
                        we're listing is properly converting and have a budget to work with it
                    </li>
                </ul>
                <a class="btn_default btn_sign_up" href="//mgine.offerslook.com/index.php?r=site/signup">Sign Up</a>
            </div>
        </div>
    </section>

    <section class="section1 pb-0">
        <a id="advertisers-info" class="beforeContentAnchor"></a>
        <div class="container">
            <h2>Advertisers</h2>
            <div class="content_box">
                <ul class="bullet_list">
                    <li><strong>Trustworthy acquisition channels:</strong> We're constantly monitoring our channels
                        for the possibility of fraud and we're very careful with whom to work with
                    </li>
                    <li><strong>Huge traffic volumes:</strong> We're able to deliver up to 10k daily conversions
                    </li>
                    <li><strong>GEO diversity:</strong> Want to get users from multiple countries across the world?
                        We're able to deliver engaged users almost from any country to your app
                    </li>
                    <li><strong>Quick launch:</strong> Need traffic as soon as possible? We can get started within
                        12 hours with your newest campaign
                    </li>
                </ul>
                <a class="btn_default btn_sign_up" href="//mgine.offerslook.com/index.php?r=advertiser/site/signup">Sign Up</a>
            </div>
        </div>
    </section>

    <section class="section1 pb-0">
        <div class="container">
            <?php require_once 'about-us.php'; ?>
            <?php require_once 'contact-us.php'; ?>
        </div>
    </section>

</main>

<?php require_once 'footer.php'; ?>