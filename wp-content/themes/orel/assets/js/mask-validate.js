jQuery("document").ready(($) => {
	$("#validationCustom01").mask("XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX",{
		translation: {
			"X":{
				pattern: /[A-z\s]/
			}
		}
	});
	$("#validationCustom02").mask("9000000000");

	$("#validationCustom05").mask("XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX",{
		translation: {
			"X":{
				pattern: /[A-z\s]/
			}
		}
	});

	$("#validationCustom06").mask("9000000000");
});
