const http = require('http')
let server = http.createServer(function(request,response){
  response.write('Now we will take a break')
  response.end();
})

server.listen(3001, function(){
    console.log("server is running on port 3001");
    }); 