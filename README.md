# MixPanel CakePHP Component (Sever-side event tracking)
Nothing crazy going on here.  I Cake-a-fied a MixPanel tracking class to be easily dropped into a cake app.  Explicit funnel tracking is not supported via serverside events, but MixPanel typically recommends using their Funnel Builder for funnels.

## Steps to get cracking:
1.    Drop the mixpanel.php file into your /app/controllers/components directory.
2.    Add 'Mixpanel' to the Components Array in the controller you'd like to use the component in:
        var $components = array('Mixpanel');
3.    Set MixPanel project token
        $this->Mixpanel->token = "124124121fasdfas1212";
4.    Call event tracker
        $this->Mixpanel->track("Test Event", 'param1'=>$value1, 'param2'=>$value2);
5.    Head over to your Mixpanel dashboard and watch the realtime magic happen.