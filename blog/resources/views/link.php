<img height="21" width="133" src="https://content.linkedin.com/content/dam/developer/global/en_US/site/img/signin_with_linkedin-button-js-sdk.png">
<script type="in/Login"></script>
<script type="text/javascript" src="//platform.linkedin.com/in.js">
    api_key: 816wgdlmgdr9yf
    authorize: true
    onLoad: onLinkedInLoad
</script>

<script type="text/javascript">
    
    // Setup an event listener to make an API call once auth is complete
    function onLinkedInLoad() {
        IN.Event.on(IN, "auth", getProfileData);
    }

    // Handle the successful return from the API call
    function onSuccess(data) {

        console.log(data);
    }

    // Handle an error response from the API call
    function onError(error) {
        console.log(error);
    }

    // Use the API call wrapper to request the member's basic profile data
    function getProfileData() {
        IN.API.Raw("/people/~").result(onSuccess).error(onError);
 IN.API.Profile("me").fields("first-name", "last-name", "email-address","picture-url").result(onSuccess).error(onError);
    }

</script>