from flask import Flask
from application.__init__ import *
app = create_app()
db.init_app(app)