const express = require("express");
const router = express.Router();


const {
  adduser,
  
} = require("../controllers/user");

router.route("/adduser").post(adduser);

module.exports = router;