#AJAX IN JAVASCRIPT#

XMLHttpRequest Object is used to interact with the server.

##Properties and methods of XMLHttpRequest##
1. **readyState** : It is used to determine the current status of the request.

    0: request not initialized by client yet
    1: connection is established with the server
    2: request is received by the server
    3: server is processing the request
    4: response is ready and recieved at client end

2. **status**: It specifies if the request was successful or not.

    200: OK, i.e. request was successful
    404: page was not found

3. **onreadystatechange**: it holds a function which runs every time the value of readyState changes
4. open (method, server, asynchronous)
5. send() for GET Method or send(data) for POST method

##Properties and Methods to recieve response##

1. **responseText**: This contains the response from server as text
2. **responseXML**: This receives the response from server as XML

#AJAX IN JQUERY#
1. $.get is used for making use of GET method for request
2. $.post is used for making use of POST method for request

**Syntax:**
$.get(server_url, request_data, function(response_data, status, XMLHttpRequest), dataType)

$.post(server_url, request_data, function(response_data, status, XMLHttpRequest), dataType)

1. The function will be executed only when status is a success else not
2. possible data type of response: html, text, xml, json etc.