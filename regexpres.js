const form = $("#form");
const search = $("#searchee2");

const checkInput = (input) => {
    var regex = /[^0-9]+$/;
    if (regex.test(input.val()) == false) {
        alert('No numbers in input');
        return false;
    }
    return true;
} 

const validate = (e) => {
    e.preventDefault();
    if (checkInput(search)) {
        $.ajax({
            url: "results_page.php", // server url
            type: 'POST', //POST or GET 
            async: false,
            data: {searchee2: search.val()}, // data to send in ajax format or querystring format
            datatype: 'json',
            beforeSend: function() {
                alert('Sending data...');
                // do some loading options
            },
            success: function(data) {
                    alert(data + " uploaded successfully!");
                // return data in callback
            },
     
            complete: function() {
                alert('Request complete');
                // success alerts
            },
     
            error: function(xhr, status, error) {
                alert(xhr.responseText); // error occur 
            }
     
        });
        
    }
    else
        return false;
}