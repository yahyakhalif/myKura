const User = require("../models/user");

exports.adduser = async (req, res) => {
  try {
    const user = await User.create(req.body);
    res.json({ status: "ok", user});
  } catch (error) {
    console.log(error);
    res.json({ status: "error", error });
  }
};

