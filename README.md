# ChatEnc
A simple chat application written in `PHP` and 'JS', which safekeeps the chats by AES encryption.

## Disclaimer
This was written when I was learning PHP and web development in general. The code may not be secure and may have critical security issues. Use at your own risk(If you are).

## Technology
- Uses HTML, CSS, JS, and PHP
- Uses JQuery and `AES.js`

## Why this is bad
- It doesnot uses websockets or any other RTC protocols
- Relies on raw HTTP polling for getting messages
- Server does not uses any database, It uses `.txt` files to store chats
- It uses `PHP`
- Uses `iframe` to show a popup (don't ask why😰)
- server uses a `countLines` method to count no. of lines in a chat file, in order to check for new messages
- Encryption just works
- and a lot more

## Who wrote this code
This code was written by my younger self in 2019. He was a total beginner and didn't know how to code. It was his first project using 'PHP'.

