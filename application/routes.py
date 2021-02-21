from flask import request
from flask import current_app as app
from twilio.twiml.messaging_response import MessagingResponse
from .models import db, Message
import os


@app.route("/sms", methods=['POST'])
def sms_reply():
  sender = request.form['From']
  content = request.form['Body']
  
  new_message = Message(sender=sender, content=content)
  db.session.add(new_message)
  db.session.commit()

  resp = MessagingResponse()

  resp.message("The Morse Code Bot was sent the message!")

  return str(resp)


@app.route("/get_messages", methods=['GET'])
def get_messages():
  password = request.args.get('password')
  if os.environ.get("get_password") == password:
    ret = Message.query.all()
    Message.query.delete()
    return ret
  return -1

  