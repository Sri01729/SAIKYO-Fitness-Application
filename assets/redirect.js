function redirectToPage(pageName, delayInMilliseconds) {
    setTimeout(function () {
        window.location.href = pageName;
    }, delayInMilliseconds);
}