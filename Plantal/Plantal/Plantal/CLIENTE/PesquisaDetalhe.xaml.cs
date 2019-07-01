using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

using Xamarin.Forms;
using Xamarin.Forms.Xaml;

namespace Plantal.CLIENTE
{
	[XamlCompilation(XamlCompilationOptions.Compile)]
	public partial class PesquisaDetalhe : ContentPage
	{
        PlantaObj p;
        public PesquisaDetalhe (PlantaObj p)
		{
			InitializeComponent ();
            this.p = p;
            setValues();

        }
        private void setValues()
        {
            nomeCientifico.Text = p.nomeCientifico;
            nome.Text = p.nomeComum;
            especie.Text = p.especie;
            familia.Text = p.familia;
            ordem.Text = p.ordem;
            fotos.Text = p.fotosURL;
            qrcode.Text = p.qrcode;
            descricao.Text = p.descricao;

        }

        private async void Button_Clicked(object sender, EventArgs e)
        {
            await Navigation.PushModalAsync(new Pesquisa());
        }
    }



}