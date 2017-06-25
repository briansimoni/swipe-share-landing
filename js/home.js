$('#submit-arrow').click(function() {
   $("#email-collection-form").submit();
});

// Check to see if an email was submitted and display success message
console.log('hello');
var url = new URL(window.location.href);
if(url.searchParams.get("submission") === "success") {
    $('#submission-message').toggle();
}