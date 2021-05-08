$(document).ready(function() {
    function getAndWriteComs() {
        $.ajax({
          'type': 'POST',
          'url' : Globals.baseUrl + "/comments",
          'data': {
            'pathToManage': Globals.pathToManage
          },
          'success': function(response) {
            $("#commentsContent").html(response);
          }
        });
      }
      
      getAndWriteComs();

      $("#commentsToggle").click(function() {
    
        $("#commentsContainer").toggle("slide", { direction: "right"}, 300, complete = function() {
          getAndWriteComs();
        });
    
      });
    
      $("#commentsToggle").click(); //pour toggle par défaut, à enlever si besoin    
})