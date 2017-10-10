// Determine theme depending on device
var isAndroid = Framework7.prototype.device.android === true;
var isIos = Framework7.prototype.device.ios === true;
var isWeb = !isAndroid && !isIos;

console.log('isAndroid', isAndroid);
console.log('isIos', isIos);
console.log('isWeb', isWeb);

// Set Template7 global devices flags
Template7.global = {
    android: isAndroid,
    ios: isIos,
    items: [
        {title: 111},
        {title: 222},
        {title: 333}
    ]
};

// Define Dom7
var $$ = Dom7,
    $views = $$('section.views');


// Change Through navbar layout to Fixed
if (isAndroid) {
    // Change class
    $$('.view.navbar-through').removeClass('navbar-through').addClass('navbar-fixed');
    // And move Navbar into Page
    $$('.view .navbar').prependTo('.view .page');
}

// Init App
var myApp = new Framework7({
    pushState: true,
    swipePanel: 'left',
    // swipeBackPage:false,
    // swipePanelCloseOpposite:false,
    // swipePanelOnlyClose:false,
    material: isIos ? false : true,
    template7Pages: true
});

// Init View
var mainView = myApp.addView('.view-main', {
    // Don't worry about that Material doesn't support it
    // F7 will just ignore it for Material theme
    dynamicNavbar: true
});

// Close panel
$$('.panel-close').on('click', function () {
    myApp.closePanel();
});

$views.on('click', '.form-to-data', function () {
    console.log('wqwqw');
    var
        $name = $$('input[name=name]'),
        $email = $$('input[name=email]'),
        $textarea = $$('textarea[name=text]');
        formData = myApp.formToData('.form');

    try {
        if (!$name.val().trim().length) {
            $name.addClass('warning');

            return;
        }

        if (!$email.val().trim().length) {
            $email.addClass('warning');

            return;
        }

        if (!$textarea.val().trim().length) {
            $textarea.addClass('warning');

            return;
        }

        $$.post('post_feedback.php', formData, function (data) {
            $$('.form').html('<p>Паведамленне было даслана.</p>');
        });
    } catch (e) {
        console.warn(e);
    }
});
