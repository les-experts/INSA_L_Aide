$(document).ready(function () {

  function getAndWriteComs() {
    $.ajax({
      'type': 'GET',
      'url': Globals.baseUrl + "/comments",
      'data': {
        'pathToManage': Globals.pathToManage
      },
      'success': function (response) {
        $("#commentsContent").html(response);
      }
    });
  }

  function moveCommentToggler() {
    var toggler = $(".commentsToggler");

    if (toggler.hasClass("moveIn")) {
      toggler.removeClass("moveIn")
      toggler.addClass("moveOut");
      toggler.addClass("pulse");
      toggler.attr("data-tooltip","Afficher les commentaires");

    } else {
      toggler.removeClass("moveOut")
      toggler.addClass("moveIn");
      toggler.removeClass("pulse");
      toggler.attr("data-tooltip","Cacher les commentaires");
    }
  }

  $(".commentsToggler").click(function () {

    moveCommentToggler();

    $("#commentsContainer").toggle("slide", { direction: "right" }, 500, complete = function () {
      getAndWriteComs();
    });

  });  

  $("form").submit(function (event) {
    var formData = {
      pathToManage: $("#pathToManage").val(),
      pseudo: $("#pseudo").val(),
      newComment: $("#newComment").val(),
    };

    $.ajax({
      type: "POST",
      url: Globals.baseUrl + "/comments/new",
      data: formData,
      dataType: "json",
      encode: true,
    }).done(function (data) {
      if (!data.success) {
        M.toast({html: 'Ajout commentaire échoué', classes: 'toastError rounded center-align'});
      }else {
        M.toast({html: 'Commentaire ajouté avec succès', classes: 'toastSuccess rounded center-align'});
        $("#newComment").val("");
        $("label[for='newComment']").removeClass("active");
      }

      getAndWriteComs();

    });
    
    event.preventDefault();

  });

  $('.tooltipped').tooltip();

})