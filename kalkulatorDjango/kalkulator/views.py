from django.shortcuts import render
from .forms import CalcForm


def calc_view(request):
    result = None
    form = CalcForm(request.POST or None)

    if request.method == 'POST':
        if form.is_valid():
            kwota = form.cleaned_data['kwota']
            lata = form.cleaned_data['lata']
            opro = form.cleaned_data['opro']

            miesiace = lata * 12
            oprocentowanie_msc = (opro / 100) / 12

            if oprocentowanie_msc > 0:
                result = kwota * oprocentowanie_msc / (1 - (1 + oprocentowanie_msc) ** (-miesiace))
            else:
                result = kwota / miesiace

            result = round(result, 2)

    return render(request, 'calc_view.html', {'form': form, 'result': result})