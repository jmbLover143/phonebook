function validate(){
             var name = document.getElementById("name").value;                   
             var email = document.getElementById("email").value;
             var number = document.getElementById("number").value;
             var address = document.getElementById("address").value;
             var file = document.getElementById("file").value;
             var notes = document.getElementById("notes").value;
              
             
             if(name == "" || name == null || file == "" || file == null || email == "" || email == null || number == "" || number == null || address == "" || address == null || notes == "" || notes == null ){
                 alert("Please input all required fields. .");
                 return false;
             }else{
                 alert("Successfully add contact. Thank you");
                 return true;
             }
             
             
            }