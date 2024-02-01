<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telegram Bot README</title>
</head>
<body>
    <h1>🤖 Telegram Bot with Gemini API Integration</h1>
    <p>This repository contains a PHP script for creating a Telegram bot that leverages the Gemini API for enhanced functionalities. It's designed to handle user interactions in real-time, manage sessions, and provide custom responses based on user input. Get ready to launch your bot with interactive commands, session management, and seamless integration with Gemini API services!</p>

    <h2>📋 Prerequisites</h2>
    <p>Before diving in, ensure you have the following ready:</p>
    <ul>
        <li>A Telegram account.</li>
        <li>PHP environment with Composer installed.</li>
        <li>A server with SSL (HTTPS) support for the webhook setup.</li>
        <li>Access to the Gemini API via MarketSuite on Google Cloud Platform.</li>
    </ul>

    <h2>🔑 Configuration</h2>
    <ol>
        <li><strong>Telegram Bot Token</strong>: Obtain your bot token by creating a bot through Telegram's BotFather. Replace <code>"BOT_TOKEN"</code> in the script with your actual bot token.</li>
        <li><strong>Gemini API Key</strong>: Replace <code>'GOOGLE_API_FOR_GEMINI'</code> with your actual Gemini API key obtained from the MarketSuite on Google Cloud Platform.</li>
    </ol>

    <h2>🚀 Getting Started</h2>
    <ol>
        <li><strong>Clone the Repository</strong>: Clone or download this repository to your server.</li>
        <li><strong>Install Dependencies</strong>: Run <code>composer install</code> to install the required PHP dependencies.</li>
        <li><strong>Configure Your Bot</strong>: Follow the configuration steps to set up your bot token and Gemini API key.</li>
        <li><strong>Deploy</strong>: Upload the PHP script to your server. Ensure it's accessible via HTTPS.</li>
        <li><strong>Set Up the Webhook</strong>: Configure the webhook to point to your script's URL using the Telegram API.</li>
    </ol>

    <h2>🛠 Setting Up the Webhook</h2>
    <p>Set the webhook for your bot using the following URL, replacing <code>&lt;YOUR_BOT_TOKEN&gt;</code> and <code>&lt;YOUR_WEBHOOK_URL&gt;</code> with your information:</p>
    <a href="https://api.telegram.org/bot<YOUR_BOT_TOKEN>/setWebhook?url=<YOUR_WEBHOOK_URL>">Set Webhook</a>
    <p>Verify the webhook is set correctly:</p>
    <a href="https://api.telegram.org/bot<YOUR_BOT_TOKEN>/getWebhookInfo">Get Webhook Info</a>

    <h2>📖 Bot Features and Usage</h2>
    <ul>
        <li><strong>Interactive Commands</strong>: Your bot supports various commands like <code>/start</code>, <code>/bard</code>, <code>/end</code>, and <code>/dev</code> to engage users.</li>
        <li><strong>Session Management</strong>: Utilizes sessions to maintain context and continuity in conversations.</li>
        <li><strong>Gemini API Integration</strong>: Enhances bot responses using the Gemini API for dynamic content generation.</li>
        <li><strong>Custom Responses</strong>: Includes error handling and default prompts for a user-friendly experience.</li>
    </ul>

    <h2>🤝 Contributing</h2>
    <p>Feel free to fork this repository, make changes, and submit pull requests. Contributions to enhance the bot's functionalities or documentation are always welcome!</p>

    <h2>📄 License</h2>
    <p>This project is licensed under the MIT License. See the <a href="LICENSE">LICENSE</a> file for details.</p>

    <h2>📬 Contact</h2>
    <p>For questions or suggestions, please reach out to me at:</p>
    <ul>
        <li>📧 Email: <a href="mailto:your-email@example.com">your-email@example.com</a></li>
        <li>💼 GitHub: <a href="https://github.com/YourGitHub">@YourGitHub</a></li>
    </ul>
</body>
</html>
