# Telegram Bot and Webhook Setup Guide

This repository contains the PHP script necessary to create a Telegram bot and set up a webhook for real-time message processing. Telegram bots are automated Telegram accounts you can chat with or use from within other chat conversations. Webhooks, on the other hand, allow your bot to receive incoming messages in real-time.

## Prerequisites

Before starting, make sure you have:
- A Telegram account
- Basic knowledge of PHP
- A server with SSL (HTTPS) to host your bot (required for webhook setup)

<hr>

## Creating a Telegram Bot

1. **Start a Chat with BotFather**: BotFather is the official Telegram bot that allows you to create new bots. Search for @BotFather in your Telegram app and start a chat with it.
2. **Create a New Bot**: Type `/newbot` and follow the instructions. BotFather will ask you for a name and username for your bot. After completion, you will receive a token to access the HTTP API.
3. **Note Your Bot's Token**: Keep the token secure as it allows you to control your bot.

<hr>

## Setting Up the Webhook

1. **Upload Your PHP Script**: Upload the `bot.php` file from this repository to your server. Make sure your server supports HTTPS.
2. **Set the Webhook URL**: Use the Telegram API to set the webhook URL to your `bot.php` script. Replace `<YOUR_BOT_TOKEN>` with your bot's token and `<YOUR_WEBHOOK_URL>` with the URL to your script.

    ```html
    <a href="https://api.telegram.org/bot<YOUR_BOT_TOKEN>/setWebhook?url=<YOUR_WEBHOOK_URL>">Set Webhook</a>
    ```

3. **Verify the Webhook**: To check if the webhook is set up correctly, use the `getWebhookInfo` method:

    ```html
    <a href="https://api.telegram.org/bot<YOUR_BOT_TOKEN>/getWebhookInfo">Get Webhook Info</a>
    ```

<hr>

## Testing Your Bot

Once the webhook is set up, any messages sent to your bot will be forwarded to your script, which can then process the messages accordingly. Test your bot by sending it a message through Telegram and verify that your server receives the incoming requests.

<hr>

## Additional Resources

- [Telegram Bot API Official Documentation](https://core.telegram.org/bots/api)
- [Webhook Setup Guide](https://core.telegram.org/bots/webhooks)


## Functionality and Code Structure

The bot is developed in PHP and relies on Composer for managing dependencies, including the use of a `GeminiAPI` client for handling specific functionalities. Ensure you have Composer installed and run `composer install` in your project directory to fetch the necessary packages.

### Key Features:

- **GeminiAPI Integration**: Leverages the GeminiAPI for processing and responding to prompts. Users must configure their own API keys or settings as required by the API's usage terms.
- **Session Management**: Utilizes a session folder (`session/`) to maintain state or context between messages, allowing for conversational continuity and stateful interactions.
- **Interactive Commands**: Supports commands such as `/start`, `/bard`, `/end`, and `/dev`, enabling users to interact with the bot in a structured manner. The `/dev` command provides the developer's contact information, showcasing how to include personal or contact details securely.
- **Inline Keyboard and Callback Queries**: Implements an inline keyboard and handles callback queries, enhancing user interaction with structured responses and options.
- **Error Handling**: Includes basic error handling for unsupported file types and guides users with a default prompt to start or resume interaction.

### Setup and Configuration:

Ensure you replace `"BOT_TOKEN"` with your actual bot token provided by BotFather. If you're using GeminiAPI or any other external services, configure the respective API keys or credentials as required by the script.

For session management, confirm the session folder exists on your server and is writable by the script to properly handle stateful interactions.

### Running the Bot:

Upload the script to your server and set up the webhook as described in the "Setting Up the Webhook" section. Test the bot's functionalities by sending supported commands and verifying the bot's responses and interactions.

