const express = require('express');
const bodyParser = require('body-parser');

const app = express();
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: false }));

app.post('/ussd', (req, res) => {
    // Read the variables sent via POST from our API
    const {
        sessionId,
        serviceCode,
        phoneNumber,
        text,
    } = req.body;

    let response = '';
    if (text == "") {
        // This is the first request. Note how we start the response with CON
        response  = `CON Welcome to myKura election nominations
        1. Enter your voter number \n`;
    } 
//     else if (text == "1") {
//         // Business logic for first level response
//         response = `CON Position: Governor
//         1. Ryan Mukiti
//         2. Lewis Mutoni `;
//    } 
//    else if(text == "1*1") { 
//        response = `CON Confirm your vote: 
//        1. Ryan Mukiti`;
//    } 
//    else if(text == "1*2") { 
//        response = `CON Confirm your vote: 
//        1. Lewis Mutoni `;
//    }
//    else if((text == "1*1*1") || (text == "1*2*1")) { 
//        response = `CON Position: Member of Parliament
//        1. Leo Bikuri
//        2. Natasha Gichuhi `;
//    }
//    else if((text == "1*1*1*1") || (text == "1*2*1*1")){ 
//        response = `CON Confirm your vote:
//        1. Leo Bikuri `;
//    }
//    else if((text == "1*1*1*2") || (text == "1*2*1*2")){ 
//        response = `CON Confirm your vote:
//        1. Natasha Gichuhi`;
//    }
//    else if((text == "1*1*1*1*1") || (text == "1*2*1*1*1") || (text == "1*1*1*2*1") || (text == "1*2*1*2*1"))  { 
//        response =  `CON Position: Member of County Assembly
//        1. Yahya Khalif
//        2. Jason Jabez `;
//    }
//    else if((text == "1*1*1*1*1*1") || (text == "1*2*1*1*1*1") || (text == "1*1*1*2*1*1") || (text == "1*2*1*2*1*1")){ 
//        response = `CON Confirm your vote:
//        1. Yahya Khalif `;
//    }
//    else if((text == "1*1*1*1*1*2") || (text == "1*2*1*1*1*2") || (text == "1*1*1*2*1*2") || (text == "1*2*1*2*1*2")){ 
//        response = `CON Confirm your vote:
//         1. Jason Jabez `;
//    }
//     else if((text == "1*1*1*1*1*1*1") || (text == "1*2*1*1*1*1*1") || (text == "1*1*1*2*1*1*1") || (text == "1*2*1*2*1*1*1") || (text == "1*1*1*1*1*2*1") || (text == "1*2*1*1*1*2*1") || (text == "1*1*1*2*1*2*1") || (text == "1*2*1*2*1*2*1")){ 
//         response = `END Thank you for using myKura to cast your vote.\n Together we can make voting a hassle-free `;
//     }
    // // Send the response back to the API
    // res.set('Content-Type: text/plain');
    // res.send(response);
});