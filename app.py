from flask import Flask, render_template, request

app = Flask(__name__)

@app.route('/')
def index():
    return render_template('index.html')

@app.route('/resume', methods=['POST'])
def resume():
    # Get form data
    form_data = request.form.to_dict()
    file = request.files['img']
    file.save(f'static/uploads/{file.filename}')
    form_data['img'] = file.filename

    return render_template('resume.html', data=form_data)

if __name__ == '__main__':
    app.run(debug=True)
