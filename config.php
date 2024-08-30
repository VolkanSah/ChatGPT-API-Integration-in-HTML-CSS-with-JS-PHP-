<?php
// Configuration file

// Define the OpenAI API key
define('OPENAI_API_KEY', 'sk-.................................');
// Define the model to be used, for example: text-davinci-003
define('MODEL', 'text-davinci-003');
// Define the temperature setting for the model, a value between 0 and 1 (e.g., 0.9)
define('TEMPERATURE', 0.9);
// Define the maximum number of tokens to be generated by the model (e.g., 1000)
define('MAX_TOKENS', 1000);
// Define the top_p setting for the model, a value between 0 and 1 (e.g., 1)
define('TOP_P', 1);
// Define the frequency penalty for the model, a value between -2 and 2 (e.g., 0.0)
define('FREQUENCY_PENALTY', 0.0);
// Define the presence penalty for the model, a value between -2 and 2 (e.g., 0.0)
define('PRESENCE_PENALTY', 0.0);