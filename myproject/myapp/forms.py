from django import forms
from myapp.models import Users


class AddUser(forms.ModelForm):
    class Meta:
        model = Users
        fields = '__all__'
