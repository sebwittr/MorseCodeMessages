from flask import Flask, request, redirect
from twilio.rest import Client


app = Flask(__name__)

@app.route("/sms", methods=['POST'])

def sms_reply():
  from_number = request.form['From']
  body = request.form['Body']

