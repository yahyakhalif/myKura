const Post = require("../models/post");

exports.addpost = async (req, res) => {
  try {
    const post = await Post.create(req.body);
    res.json({ status: "ok", post});
  } catch (error) {
    console.log(error);
    res.json({ status: "error", error });
  }
};
