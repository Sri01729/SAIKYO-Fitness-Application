// Define variables
const messageInput = document.getElementByIdocument.addEventListener('DOMContentLoaded', () => {d('message-input');
const chatWindow = document.querySelector('.chat-window');

// Function to send a message
function sendMessage() {
    const message = messageInput.value;
    if (message) {
        const messageElement = document.createElement('div');
        messageElement.classList.add('message');
        messageElement.textContent = message;
        chatWindow.appendChild(messageElement);
        messageInput.value = '';
    }
}

// Event listeners
const sendButton = document.getElementById('send-button');
sendButton.addEventListener('click', sendMessage);
messageInput.addEventListener('keydown', function (event) {
    if (event.key === 'Enter') {
        sendMessage();
    }
});
 });