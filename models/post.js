const mongoose = require("mongoose");

const PostSchema = new mongoose.Schema(
  {
    fullname: {
      type: String,
      
    },
   
    totalvote: {
      type: Number,
      default:0,
      
    },
   
  },
  { timestamps: true },
  { collecton: "post" }
);


const model = mongoose.model("Post", PostSchema);

module.exports = model;