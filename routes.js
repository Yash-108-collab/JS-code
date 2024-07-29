const routes = require('express').Router();

routes.get('/', function(request,response){
    response.send("Welcome to Express")
})


routes.get('/about-us', function(request,response){
    response.send('About us');
})
routes.get('/myteam', function(request,response){
    response.send('My Team');
})



module.exports = routes