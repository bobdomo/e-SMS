import pandas as pd
import numpy as np
import os
import keras
import matplotlib.pyplot as plt
from keras.layers import Dense,GlobalAveragePooling2D
from keras.applications import MobileNetV2
from keras.preprocessing import image
from keras.applications.mobilenet import preprocess_input
from keras.preprocessing.image import ImageDataGenerator
from keras.models import Model
from keras.optimizers import Adam
from keras.callbacks import ModelCheckpoint
import h5py

#tf.enable_eager_execution()

base_model=MobileNetV2(weights='imagenet', include_top=False) #imports the mobilenet model and discards the last 1000 neuron layer.

x=base_model.output
x=GlobalAveragePooling2D()(x)
x=Dense(512,activation='relu')(x) #we add dense layers so that the model can learn more complex functions and classify for better results.
x=Dense(512,activation='relu')(x) #dense layer 2
preds=Dense(3,activation='softmax')(x) #final layer with softmax activation

model = Model(inputs=base_model.input, outputs=preds)
batch_size = 8
train_datagen = ImageDataGenerator(preprocessing_function=preprocess_input,
                                 validation_split=0.3) #included in our dependencies

train_generator = train_datagen.flow_from_directory('../data/',
                                                    target_size=(224,224),
                                                    color_mode='rgb',
                                                    batch_size=batch_size,
                                                    class_mode='categorical',
                                                    subset='training',
                                                    shuffle=True)
                
val_generator = train_datagen.flow_from_directory('../data/',
                                                  target_size=(224,224),
                                                  color_mode='rgb',
                                                  batch_size=batch_size,
                                                  class_mode='categorical',
                                                  subset='validation',
                                                  shuffle=True)

model.compile(optimizer=Adam(lr=0.0001),
              loss='categorical_crossentropy',
              metrics=['accuracy'])

callbacks = model.save('test.h5')

#callbacks = [ModelCheckpoint('model_chkpt/weights.{epoch:02d}_{val_loss:.4f}_{val_acc:.4f}.h5')]

model.fit_generator(generator=train_generator,
                    steps_per_epoch = train_generator.samples // batch_size,
                    validation_data=val_generator,
                    validation_steps = val_generator.samples // batch_size,
                    callbacks=callbacks,
                    epochs=20,
                    )

#best_model = keras.models.load_model('model_chkpt/weights.07_0.1931_0.9254.h5')
best_model = keras.models.load_model('test.h5')

#import tensorflowjs as tfjs
#tfjs.converters.save_keras_model(best_model, 'model_output/')
#model.predict(np.random.rand(1, 224, 224, 3)) 


#Nak tukar jadi json
$ tensorflowjs_converter --input_format=keras ./keras_model.h5 ./tfjs_model