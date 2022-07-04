const mongoose = require("mongoose");

const UserSchema = new mongoose.Schema(
  {
    fullname: {
      type: String,
      
    },
   
    phonenumber: {
      type: String,
      
    },
   
  },
  { timestamps: true },
  { collecton: "users" }
);


const model = mongoose.model("User", UserSchema);

module.exports = model;