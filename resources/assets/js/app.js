var moment = require('moment');

// Vue instance for #app, mounted in main.js
export default {
	// Register components
	components: {
       
    },
    // Registered data
	data: {
		test: "hello world"
	},
	// Register computed properties
	computed: {
		currentUser: function() {
			return this.users[this.currentUserID];
		},
	},
	// Register methods
	methods: {

	}
}