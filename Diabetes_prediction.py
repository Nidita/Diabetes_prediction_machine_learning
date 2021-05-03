from flask import Flask, redirect, url_for, request, render_template
app = Flask(__name__)

@app.route('/success/<result>')
def success(result):
   if(result=='1'):
      return render_template('positive.html')
      ##return '<html><body><h1 style="color:#d82626;text-align: center;"><b>You are at a risk of Diabetes!&#128577; </b></h></body></html>'
   else:
      return render_template('Negative.html')
      ##return '<html><body><h1 style="color: #228B22;text-align: center;"><b>You are out of risk!&#128522;</b></h></body></html>'
   ##return ' %s' % result

@app.route('/',methods = ['POST', 'GET'])
def login():
   ##importing librabries
   import numpy as np
   import pandas as pd
   
   import io
   import requests
   import re
   import warnings
   import pickle


   
  
   
   from sklearn.preprocessing import StandardScaler, MinMaxScaler, LabelBinarizer
   loaded_model = pickle.load(open('diabetes_model.sav', 'rb'))
   #Age =  Gender = Polyuria =Polydipsia =sudden_weight_loss =" "
   #weakness = Polyphagia = Genital_thrush = visual_blurring = Itching =" "
   #Irritability = delayed_healing =" "
   #partial_paresis = muscle_stiffness = Alopecia = Obesity =" " 
   if request.method == 'POST':
      Age = request.form['Age']
      Gender = request.form['Gender']
      Polyuria = request.form['Polyuria']
      Polyphagia = request.form['Polyphagia']
      Polydipsia = request.form['Polydipsia']
      sudden_weight_loss = request.form['sudden_weight_loss']
      weakness = request.form['weakness']
      Genital_thrush = request.form['Genital_thrush']
      visual_blurring = request.form['visual_blurring']
      Itching = request.form['Itching']
      Irritability = request.form['Irritability']
      delayed_healing = request.form['delayed_healing']
      partial_paresis = request.form['partial_paresis']
      muscle_stiffness = request.form['muscle_stiffness']
      Alopecia = request.form['Alopecia']
      Obesity = request.form['Obesity']
      
      if(Age == None  or Gender == None or Polyuria == None or Polydipsia == None or sudden_weight_loss == None or weakness == None or Polyphagia ==None or Genital_thrush == None or visual_blurring == None or Itching == None or Irritability == None or delayed_healing == None or partial_paresis == None or muscle_stiffness == None or Alopecia ==None or Obesity == None  ):
         return  render_template('FillAll.html')
      else:

         mylist = [[Age, Gender,Polyuria,Polydipsia,sudden_weight_loss,weakness,Polyphagia,Genital_thrush,visual_blurring,Itching,Irritability,delayed_healing,partial_paresis,muscle_stiffness,Alopecia,Obesity]]
         data=[]
         for i in mylist[0]:
            if i=='yes'or i=='male':
               data.append(1)
            elif i=='no' or i=='female':
               data.append(0)
            else:
               data.append(int(i))
         test_data = pd.DataFrame([data], columns = ['Age', 'Gender','Polyuria','Polydipsia','sudden weight loss','weakness','Polyphagia','Genital thrush','visual blurring','Itching','Irritability','delayed healing','partial paresis','muscle stiffness','Alopecia','Obesity'])
         y_pred = loaded_model.predict(test_data)
         return redirect(url_for('success',result = y_pred[0]))

      
   else:

      Age = request.args.get('Age')
      Gender =  request.args.get('Gender')
      Polyuria = request.args.get('Polyuria')
      Polyphagia =  request.args.get('Polyphagia')
      Polydipsia =  request.args.get('Polydipsia')
      sudden_weight_loss =  request.args.get('sudden_weight_loss')
      weakness =  request.args.get('weakness')
      Genital_thrush =  request.args.get('Genital_thrush')
      visual_blurring =  request.args.get('visual_blurring')
      Itching =  request.args.get('Itching')
      Irritability =  request.args.get('Irritability')
      delayed_healing =  request.args.get('delayed_healing')
      partial_paresis =  request.args.get9('partial_paresis')
      muscle_stiffness =  request.args.get('muscle_stiffness')
      Alopecia =  request.args.get('Alopecia')
      Obesity = request.args.get('Obesity')
      if(Age == None  or Gender == None or Polyuria == None or Polydipsia == None or sudden_weight_loss == None or weakness == None or Polyphagia ==None or Genital_thrush == None or visual_blurring == None or Itching == None or Irritability == None or delayed_healing == None or partial_paresis == None or muscle_stiffness == None or Alopecia ==None or Obesity == None  ):
         return  render_template('FillAll.html')
      else:
         mylist = [[Age, Gender,Polyuria,Polydipsia,sudden_weight_loss,weakness,Polyphagia,Genital_thrush,visual_blurring,Itching,Irritability,delayed_healing,partial_paresis,muscle_stiffness,Alopecia,Obesity]]
         data=[]
         for i in mylist[0]:
            if i=='yes'or i=='male':
               data.append(1)
            elif i=='no' or i=='female':
               data.append(0)
            else:
               data.append(int(i))
         test_data = pd.DataFrame([data], columns = ['Age', 'Gender','Polyuria','Polydipsia','sudden weight loss','weakness','Polyphagia','Genital thrush','visual blurring','Itching','Irritability','delayed healing','partial paresis','muscle stiffness','Alopecia','Obesity'])
         y_pred = loaded_model.predict(test_data)
         return redirect(url_for('success',result = y_pred[0]))
   
      

if __name__ == '__main__':
   app.run(debug = True)