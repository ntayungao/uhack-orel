module.exports = {
	"env": {
		"browser": true,
		"es6": true
	},
	"extends": "eslint:recommended",
	"globals": {
		"Atomics": "readonly",
		"SharedArrayBuffer": "readonly"
	},
	"parserOptions": {
		"ecmaVersion": 2018
	},
	"rules": {
		"indent": [
			"error",
			"tab"
		],
		"linebreak-style": [
			"error",
			"unix"
		],
		"quotes": [
			"error",
			"double"
		],
		"semi": [
			"error",
			"always"
    ],
    "prefer-arrow-callback": [
      "warn"
    ],
    "arrow-parens": [
      "warn"
    ],
    "no-unused-vars": [
      "warn"
    ],
    "prefer-const": [
      "warn"
    ],
    "no-var": [
      "warn"
    ]
	}
};
