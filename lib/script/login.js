function valid(){
                    
                     var user = document.getElementById("username").value;
                     var pass = document.getElementById("password").value;
                      if(user == "" || user == null || pass == "" || pass == null  ){
                         alert("Please fill required fields.!");
                          return false;
                     }else{
                        alert("Welcome to Phone Book.");
                        return true;
                     }
                     
    }