function redirectToLibrary(fromRoute, toRoute) {
    // Set a flag or parameter in the URL (e.g., ?redirected=true)
    var flag = 'redirected=' + fromRoute;

    // Construct the URL with the flag
    var redirectUrl = toRoute + '?' + flag;

    // Redirect the user to the library index route with the flag in the URL
    window.location.href = redirectUrl;
}
