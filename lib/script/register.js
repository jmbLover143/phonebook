 function valid(){
                    
                     var user = document.getElementById("username").value;
                     var pass = document.getElementById("password").value;
                     var name = document.getElementById("name").value;
                     if(user == "" || user == null || pass == "" || pass == null || name == "" || name == null){
                         alert("Please fill required fields.!");
                          return false;
                     }else{
                        alert("Welcome to Phone Book.");
                        return true;
                     }
                     
    }