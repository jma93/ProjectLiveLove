$(function () {
    $("#createEvent").on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/ProjectLiveLove/php/eventCreation.php', // use .. to "go up" (out of the folder)
            data: {
                eventName: $("#eventName").val(), //hashtag means id, . means class
                eventLocation: $("#eventLocation").val(),
                eventTime: $("#eventTime").val(), //getting the values from what was inputted in the form
                eventDescription: $("#eventDescription").val()
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

