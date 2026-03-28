from django import forms

class CalcForm(forms.Form):
    kwota = forms.FloatField(label="Kwota", min_value=1)
    lata = forms.IntegerField(label="Lata", min_value=1)
    opro = forms.FloatField(label="Oprocentowanie", min_value=0)