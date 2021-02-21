from . import db

class Message(db.Model):
    __tablename__ = 'message'
    message_id = db.Column(
        db.Integer,
        primary_key=True
    )
    sender = db.Column(
        db.String(12),
        nullable=False
    )
    content = db.Column(
        db.Text,
        nullable=False
    )

    def __repr__(self):
        return '<Message {}>'.format(self.message_id)
