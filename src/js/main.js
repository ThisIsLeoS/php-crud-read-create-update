var confTemplateCompiled = Handlebars.compile($("body > #configuration-template").html());

getConfigurations();

// events

$("#configuration-form").submit(function(event) {
    event.preventDefault();
    $.ajax({
        "url": "putNewConfiguration.php",
        "method": "POST",
        "data": $(this).serialize(),
        "success": function(result) {
            if (result && result !== -1 && result !== -2) {
                $(".configurations-container").empty();
                getConfigurations();
            }
            else alert("error");
        },
        "error": function (iqXHR, textStatus, errorThrown) {
            alert(
                "iqXHR.status: " + iqXHR.status + "\n" +
                "textStatus: " + textStatus + "\n" +
                "errorThrown: " + errorThrown
            );
        }
    });
});

// functions

function getConfigurations() {
    $.ajax({
        "url": "getConfigurations.php",
        "method": "GET",
        "success": function(configurations) {
            printConfigurations(configurations);
        },
        "error": function (iqXHR, textStatus, errorThrown) {
            alert(
                "iqXHR.status: " + iqXHR.status + "\n" +
                "textStatus: " + textStatus + "\n" +
                "errorThrown: " + errorThrown
            );
        }
    });
}

function printConfigurations(configurations) {
    for (var i = 0; i < configurations.length; ++i) {
        var templateHtml = confTemplateCompiled(configurations[i]);
        $(".configurations-container").append(templateHtml);
    }
}
