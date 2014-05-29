enquire.register("screen and (min-width: 900px)", {

	deferSetup: true,

  setup : function() {
    // console.log("Setup Desktop matched");
  },
  match : function() {
  	// console.log("Handler Desktop matched");
  },
  unmatch : function() {
  	// console.log("Handler Mobile matched");
  }
});