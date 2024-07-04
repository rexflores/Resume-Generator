from flask import Flask, render_template, request
import os
import uuid

app = Flask(__name__)

@app.route('/')
def index():
    return render_template('index.html')

@app.route('/resume', methods=['POST'])
def resume():
    # Get form data
    form_data = request.form.to_dict()

    return render_template('resume.html', data=form_data)

if __name__ == '__main__':
    app.run(debug=True)
