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

  getAndWriteComs();

  $("#commentsToggle").click(function () {

    $("#commentsContainer").toggle("slide", { direction: "right" }, 300, complete = function () {
      getAndWriteComs();
    });

  });

  $("#commentsToggle").click(); //pour toggle par défaut, à enlever si besoin

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
      }

      getAndWriteComs();
      
    });
    
    event.preventDefault();

  });
})