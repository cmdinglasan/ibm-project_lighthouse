var commands = {
	"greeting": "Welcome to the project Lighthouse. Press the space key to operate and say lighthouse before each command",
	"command":"menu",
	"menu": [
		{
			"commands": ["go home","go to home","go back home"]
		}
	]
};

var callCommands = JSON.parse(commands);

console.log(callCommands.greeting);