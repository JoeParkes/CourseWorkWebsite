from flask import Flask, render_template
from flask.ext.bootstrap import Bootstrap


app = Flask(__name__);

@app.route('/index')
def nominee():
    return render_template('index.html')
    
@app.route('/index.html')
def nominee4():
    return render_template('index.html')
    
@app.route('/')
def nominee2():
    return render_template('index.html')
    
@app.route('/home.html')
def nominee3():
    return render_template('home.html')
    
    
@app.errorhandler(404)
def page_not_found(e):
    return render_template('404.html'), 404
    
@app.route('/about.html')
def nominee5():
    return render_template('about.html')


if __name__ == '__main__':
    Bootstrap(app)
    app.run(port=8080, host='0.0.0.0', debug=True)