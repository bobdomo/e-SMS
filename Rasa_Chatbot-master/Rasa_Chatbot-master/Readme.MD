**NOTICE**
This repo is a boilerplate for chatbot projects. Clone this repo and remove .git folder 
- rm -rf .git


## **Setting up Rasa Stack**

### **Requirement**

- Miniconda - [https://docs.conda.io/en/latest/miniconda.html](https://docs.conda.io/en/latest/miniconda.html)
- Make - [http://gnuwin32.sourceforge.net/packages/make.htm](http://gnuwin32.sourceforge.net/packages/make.htm)

### Create new virtual environment

- conda create --name _environment-name_ python=3.6


### Download all required dependency

- pip install -r requirements.txt



### Install spacy language pack 

- pip install rasa_nlu[spacy]
- python -m spacy download en
- python -m spacy download en_core_web_md



### Link spacy language pack

- python -m spacy link en_core_web_md en
