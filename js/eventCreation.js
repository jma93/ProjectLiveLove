$(function () {
    $("#createEvent").on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/ProjectLiveLove/php/eventCreation.php', // use .. to "go up" (out of the folder)
            data: {
                //get data from the event form in company-profile.php
                eventName: $("#eventName").val(),
                eventLocation: $("#eventLocation").val(),
                eventTime: $("#eventTime").val(), //getting the values from what was inputted in the form
                eventDescription: $("#eventDescription").val(),
                companyName: $("companyName").val()
            },
            success: function (data) {
                alert(data);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        });
    });

});

//when someone clicks register, take what they inputted and make it into an object that can be sent to the php server

