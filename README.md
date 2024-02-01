# 🤖 Telegram Bot with Gemini API Integration

This repository contains a PHP script for creating a Telegram bot that leverages the Gemini API for enhanced functionalities. It's designed to handle user interactions in real-time, manage sessions, and provide custom responses based on user input. Get ready to launch your bot with interactive commands, session management, and seamless integration with Gemini API services!

## 📋 Prerequisites

Before diving in, ensure you have the following ready:

- A Telegram account.
- PHP environment with Composer installed.
- A server with SSL (HTTPS) support for the webhook setup.
- Access to the Gemini API via MarketSuite on Google Cloud Platform.

## 🔑 Configuration

1. **Telegram Bot Token**: Obtain your bot token by creating a bot through Telegram's BotFather. Replace `"BOT_TOKEN"` in the script with your actual bot token.
2. **Gemini API Key**: Replace `'GOOGLE_API_FOR_GEMINI'` with your actual Gemini API key obtained from the MarketSuite on Google Cloud Platform.

## 🚀 Getting Started

1. **Clone the Repository**: Clone or download this repository to your server.
2. **Install Dependencies**: Run `composer install` to install the required PHP dependencies.
3. **Configure Your Bot**: Follow the configuration steps to set up your bot token and Gemini API key.
4. **Deploy**: Upload the PHP script to your server. Ensure it's accessible via HTTPS.
5. **Set Up the Webhook**: Configure the webhook to point to your script's URL using the Telegram API.

## 🛠 Setting Up the Webhook

Set the webhook for your bot using the following URL, replacing `<YOUR_BOT_TOKEN>` and `<YOUR_WEBHOOK_URL>` with your information:  
`https://api.telegram.org/bot<YOUR_BOT_TOKEN>/setWebhook?url=<YOUR_WEBHOOK_URL>`

Verify the webhook is set correctly:  
`https://api.telegram.org/bot<YOUR_BOT_TOKEN>/getWebhookInfo`

## 📖 Bot Features and Usage

- **Interactive Commands**: Your bot supports various commands like `/start`, `/help`, `/end`, and `/dev` to engage users.
- **Session Management**: Utilizes sessions to maintain context and continuity in conversations.
- **Gemini API Integration**: Enhances bot responses using the Gemini API for dynamic content generation.
- **Custom Responses**: Includes error handling and default prompts for a user-friendly experience.

## 🤝 Contributing

Feel free to fork this repository, make changes, and submit pull requests. Contributions to enhance the bot's functionalities or documentation are always welcome!

## 📄 License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

## 📬 Contact

For questions or suggestions, please reach out to me at:

- 📧 Email: [maleeshaudan6@gmail.com](mailto:maleeshaudan6@gmail.com)
- 💼 GitHub: [@MaleeshaUdan](https://github.com/MaleeshaUdan)
