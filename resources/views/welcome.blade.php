<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="{{ asset('assets/css/welcome.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/welcome1.css') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=DM Serif Display">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost">
  <body>
    <div id="welcomePage">
      @include('bagian.navigasi')
      @if(session('suksesKeluar'))
          <script>
              alert("Logout atau keluar berhasil!");
          </script>
      @endif
      <div id="gambarPageAtas">
        <div class="judulGambarPageAtas">WONDERFUL INDONESIA</div>
        <div class="judulGambarPageBawah">Temukan surga dunia dialam indonesia</div>
        <a href="" style="text-decoration: none"><div class="tombolPageAtas">Jelajahi Sekarang <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17" viewBox="0 0 18 17" fill="none">
          <path d="M1 8.43536L14.7232 8.29851M9.61818 1.91132L16.1412 8.4343L9.48677 15.0887" stroke="white" stroke-width="2" stroke-linecap="square" stroke-linejoin="round"/>
        </svg></div></a>
      </div>
      <div class="pencariann">
        <div class="isipencarian">
          <div class="inputpencarian">
            <div class="lokasipencarian">
              <svg width="142" height="35" viewBox="0 0 142 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.9996 18.3108C12.5792 18.3108 13.8596 17.0304 13.8596 15.4508C13.8596 13.8713 12.5792 12.5908 10.9996 12.5908C9.42011 12.5908 8.13965 13.8713 8.13965 15.4508C8.13965 17.0304 9.42011 18.3108 10.9996 18.3108Z" fill="white" stroke="#3D6299" stroke-width="1.5"/>
                <path d="M3.31823 13.7825C5.12406 5.84416 16.8849 5.85333 18.6816 13.7917C19.7357 18.4483 16.8391 22.39 14.2999 24.8283C12.4574 26.6067 9.5424 26.6067 7.69073 24.8283C5.16073 22.39 2.26406 18.4392 3.31823 13.7825Z" fill="white" stroke="#3D6299" stroke-width="1.5"/>
                <path d="M39.02 12C38.98 12 38.944 11.988 38.912 11.964C38.888 11.932 38.876 11.896 38.876 11.856V3.744C38.876 3.704 38.888 3.672 38.912 3.648C38.944 3.616 38.98 3.6 39.02 3.6H40.124C40.164 3.6 40.196 3.616 40.22 3.648C40.252 3.672 40.268 3.704 40.268 3.744V10.74C40.268 10.78 40.288 10.8 40.328 10.8H44.348C44.388 10.8 44.42 10.816 44.444 10.848C44.476 10.872 44.492 10.904 44.492 10.944V11.856C44.492 11.896 44.476 11.932 44.444 11.964C44.42 11.988 44.388 12 44.348 12H39.02ZM48.2035 12.096C47.5715 12.096 47.0275 11.936 46.5715 11.616C46.1235 11.296 45.8075 10.852 45.6235 10.284C45.4875 9.852 45.4195 9.396 45.4195 8.916C45.4195 8.404 45.4835 7.948 45.6115 7.548C45.7955 6.988 46.1155 6.552 46.5715 6.24C47.0275 5.928 47.5755 5.772 48.2155 5.772C48.8235 5.772 49.3475 5.928 49.7875 6.24C50.2355 6.552 50.5515 6.984 50.7355 7.536C50.8795 7.92 50.9515 8.376 50.9515 8.904C50.9515 9.408 50.8835 9.864 50.7475 10.272C50.5635 10.84 50.2475 11.288 49.7995 11.616C49.3515 11.936 48.8195 12.096 48.2035 12.096ZM48.2035 10.896C48.4995 10.896 48.7515 10.812 48.9595 10.644C49.1755 10.476 49.3315 10.24 49.4275 9.936C49.5075 9.672 49.5475 9.336 49.5475 8.928C49.5475 8.496 49.5075 8.16 49.4275 7.92C49.3395 7.616 49.1875 7.384 48.9715 7.224C48.7555 7.056 48.4915 6.972 48.1795 6.972C47.8835 6.972 47.6275 7.056 47.4115 7.224C47.1955 7.384 47.0395 7.616 46.9435 7.92C46.8635 8.2 46.8235 8.536 46.8235 8.928C46.8235 9.32 46.8635 9.656 46.9435 9.936C47.0315 10.24 47.1835 10.476 47.3995 10.644C47.6235 10.812 47.8915 10.896 48.2035 10.896ZM52.4114 12C52.3714 12 52.3354 11.988 52.3034 11.964C52.2794 11.932 52.2674 11.896 52.2674 11.856V3.744C52.2674 3.704 52.2794 3.672 52.3034 3.648C52.3354 3.616 52.3714 3.6 52.4114 3.6H53.5154C53.5554 3.6 53.5874 3.616 53.6114 3.648C53.6434 3.672 53.6594 3.704 53.6594 3.744V8.076C53.6594 8.1 53.6674 8.116 53.6834 8.124C53.6994 8.132 53.7154 8.124 53.7314 8.1L55.6754 5.952C55.7314 5.896 55.7914 5.868 55.8554 5.868H57.1274C57.2074 5.868 57.2474 5.896 57.2474 5.952C57.2474 5.976 57.2354 6.008 57.2114 6.048L55.6874 7.872C55.6634 7.896 55.6594 7.924 55.6754 7.956L57.4754 11.832C57.4914 11.864 57.4994 11.888 57.4994 11.904C57.4994 11.968 57.4554 12 57.3674 12H56.2034C56.1234 12 56.0674 11.964 56.0354 11.892L54.7274 8.844C54.7194 8.828 54.7034 8.82 54.6794 8.82C54.6634 8.812 54.6514 8.816 54.6434 8.832L53.6834 9.936C53.6674 9.968 53.6594 9.996 53.6594 10.02V11.856C53.6594 11.896 53.6434 11.932 53.6114 11.964C53.5874 11.988 53.5554 12 53.5154 12H52.4114ZM60.6777 5.772C61.1818 5.772 61.6258 5.86 62.0098 6.036C62.3938 6.212 62.6898 6.456 62.8978 6.768C63.1058 7.072 63.2098 7.42 63.2098 7.812V11.856C63.2098 11.896 63.1938 11.932 63.1618 11.964C63.1378 11.988 63.1058 12 63.0658 12H61.9618C61.9218 12 61.8858 11.988 61.8538 11.964C61.8298 11.932 61.8178 11.896 61.8178 11.856V11.472C61.8178 11.448 61.8098 11.436 61.7938 11.436C61.7778 11.428 61.7618 11.432 61.7458 11.448C61.3538 11.88 60.7858 12.096 60.0418 12.096C59.4418 12.096 58.9458 11.944 58.5538 11.64C58.1698 11.336 57.9778 10.884 57.9778 10.284C57.9778 9.66 58.1938 9.176 58.6258 8.832C59.0658 8.48 59.6818 8.304 60.4738 8.304H61.7578C61.7978 8.304 61.8178 8.284 61.8178 8.244V7.956C61.8178 7.644 61.7258 7.404 61.5418 7.236C61.3578 7.06 61.0818 6.972 60.7138 6.972C60.4098 6.972 60.1618 7.028 59.9698 7.14C59.7858 7.244 59.6698 7.392 59.6218 7.584C59.5978 7.68 59.5418 7.72 59.4538 7.704L58.2898 7.56C58.2498 7.552 58.2138 7.54 58.1818 7.524C58.1578 7.5 58.1498 7.472 58.1578 7.44C58.2218 6.952 58.4818 6.552 58.9378 6.24C59.4018 5.928 59.9818 5.772 60.6777 5.772ZM60.3898 10.992C60.7818 10.992 61.1178 10.888 61.3978 10.68C61.6778 10.472 61.8178 10.208 61.8178 9.888V9.324C61.8178 9.284 61.7978 9.264 61.7578 9.264H60.7498C60.3258 9.264 59.9898 9.344 59.7418 9.504C59.5018 9.664 59.3818 9.892 59.3818 10.188C59.3818 10.444 59.4738 10.644 59.6578 10.788C59.8498 10.924 60.0938 10.992 60.3898 10.992ZM66.8873 12.072C66.3833 12.072 65.9393 12 65.5553 11.856C65.1793 11.704 64.8873 11.5 64.6793 11.244C64.4713 10.98 64.3673 10.688 64.3673 10.368V10.26C64.3673 10.22 64.3793 10.188 64.4033 10.164C64.4353 10.132 64.4713 10.116 64.5113 10.116H65.5673C65.6073 10.116 65.6393 10.132 65.6633 10.164C65.6953 10.188 65.7113 10.22 65.7113 10.26V10.284C65.7113 10.484 65.8193 10.66 66.0353 10.812C66.2593 10.956 66.5393 11.028 66.8753 11.028C67.1953 11.028 67.4553 10.964 67.6553 10.836C67.8553 10.7 67.9553 10.532 67.9553 10.332C67.9553 10.148 67.8713 10.012 67.7033 9.924C67.5433 9.828 67.2793 9.728 66.9113 9.624L66.4553 9.48C66.0473 9.36 65.7033 9.232 65.4233 9.096C65.1433 8.96 64.9073 8.776 64.7153 8.544C64.5233 8.304 64.4273 8 64.4273 7.632C64.4273 7.072 64.6473 6.628 65.0873 6.3C65.5273 5.964 66.1073 5.796 66.8273 5.796C67.3153 5.796 67.7433 5.876 68.1113 6.036C68.4793 6.188 68.7633 6.404 68.9633 6.684C69.1633 6.956 69.2633 7.268 69.2633 7.62C69.2633 7.66 69.2473 7.696 69.2153 7.728C69.1913 7.752 69.1593 7.764 69.1193 7.764H68.0993C68.0593 7.764 68.0233 7.752 67.9913 7.728C67.9673 7.696 67.9553 7.66 67.9553 7.62C67.9553 7.412 67.8513 7.24 67.6433 7.104C67.4433 6.96 67.1673 6.888 66.8153 6.888C66.5033 6.888 66.2473 6.948 66.0473 7.068C65.8553 7.18 65.7593 7.34 65.7593 7.548C65.7593 7.74 65.8513 7.888 66.0353 7.992C66.2273 8.088 66.5433 8.196 66.9833 8.316L67.2473 8.388C67.6713 8.516 68.0273 8.648 68.3153 8.784C68.6033 8.912 68.8473 9.096 69.0473 9.336C69.2473 9.568 69.3473 9.872 69.3473 10.248C69.3473 10.816 69.1233 11.264 68.6753 11.592C68.2273 11.912 67.6313 12.072 66.8873 12.072ZM71.3173 5.028C71.0693 5.028 70.8653 4.948 70.7053 4.788C70.5453 4.628 70.4653 4.424 70.4653 4.176C70.4653 3.928 70.5453 3.724 70.7053 3.564C70.8653 3.404 71.0693 3.324 71.3173 3.324C71.5653 3.324 71.7693 3.404 71.9293 3.564C72.0893 3.724 72.1693 3.928 72.1693 4.176C72.1693 4.424 72.0893 4.628 71.9293 4.788C71.7693 4.948 71.5653 5.028 71.3173 5.028ZM70.7413 12C70.7013 12 70.6653 11.988 70.6333 11.964C70.6093 11.932 70.5973 11.896 70.5973 11.856V6C70.5973 5.96 70.6093 5.928 70.6333 5.904C70.6653 5.872 70.7013 5.856 70.7413 5.856H71.8453C71.8853 5.856 71.9173 5.872 71.9413 5.904C71.9733 5.928 71.9893 5.96 71.9893 6V11.856C71.9893 11.896 71.9733 11.932 71.9413 11.964C71.9173 11.988 71.8853 12 71.8453 12H70.7413Z" fill="#808080"/>
                <path d="M90.6199 5.22084L86.8165 9.02417C86.3674 9.47334 85.6324 9.47334 85.1832 9.02417L81.3799 5.22084" fill="white"/>
                <path d="M90.6199 5.22084L86.8165 9.02417C86.3674 9.47334 85.6324 9.47334 85.1832 9.02417L81.3799 5.22084" stroke="#808080" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M42.2 23.588C42.728 23.588 43.192 23.696 43.592 23.912C43.992 24.128 44.3 24.436 44.516 24.836C44.74 25.228 44.852 25.68 44.852 26.192C44.852 26.696 44.736 27.14 44.504 27.524C44.28 27.908 43.96 28.208 43.544 28.424C43.136 28.632 42.664 28.736 42.128 28.736H40.424C40.384 28.736 40.364 28.756 40.364 28.796V31.856C40.364 31.896 40.348 31.932 40.316 31.964C40.292 31.988 40.26 32 40.22 32H38.816C38.776 32 38.74 31.988 38.708 31.964C38.684 31.932 38.672 31.896 38.672 31.856V23.732C38.672 23.692 38.684 23.66 38.708 23.636C38.74 23.604 38.776 23.588 38.816 23.588H42.2ZM41.948 27.38C42.316 27.38 42.612 27.276 42.836 27.068C43.06 26.852 43.172 26.572 43.172 26.228C43.172 25.876 43.06 25.592 42.836 25.376C42.612 25.16 42.316 25.052 41.948 25.052H40.424C40.384 25.052 40.364 25.072 40.364 25.112V27.32C40.364 27.36 40.384 27.38 40.424 27.38H41.948ZM48.1621 25.736C48.6821 25.736 49.1461 25.828 49.5541 26.012C49.9621 26.188 50.2781 26.432 50.5021 26.744C50.7341 27.056 50.8501 27.404 50.8501 27.788V31.856C50.8501 31.896 50.8341 31.932 50.8021 31.964C50.7781 31.988 50.7461 32 50.7061 32H49.3021C49.2621 32 49.2261 31.988 49.1941 31.964C49.1701 31.932 49.1581 31.896 49.1581 31.856V31.46C49.1581 31.436 49.1501 31.42 49.1341 31.412C49.1181 31.404 49.1021 31.412 49.0861 31.436C48.7501 31.876 48.2101 32.096 47.4661 32.096C46.8421 32.096 46.3381 31.944 45.9541 31.64C45.5701 31.336 45.3781 30.888 45.3781 30.296C45.3781 29.68 45.5941 29.204 46.0261 28.868C46.4581 28.524 47.0741 28.352 47.8741 28.352H49.0981C49.1381 28.352 49.1581 28.332 49.1581 28.292V28.028C49.1581 27.764 49.0781 27.56 48.9181 27.416C48.7581 27.264 48.5181 27.188 48.1981 27.188C47.9501 27.188 47.7421 27.232 47.5741 27.32C47.4141 27.408 47.3101 27.532 47.2621 27.692C47.2381 27.78 47.1861 27.82 47.1061 27.812L45.6541 27.62C45.5581 27.604 45.5141 27.568 45.5221 27.512C45.5541 27.176 45.6861 26.872 45.9181 26.6C46.1581 26.328 46.4701 26.116 46.8541 25.964C47.2461 25.812 47.6821 25.736 48.1621 25.736ZM47.9221 30.836C48.2661 30.836 48.5581 30.744 48.7981 30.56C49.0381 30.376 49.1581 30.14 49.1581 29.852V29.42C49.1581 29.38 49.1381 29.36 49.0981 29.36H48.2341C47.8741 29.36 47.5901 29.428 47.3821 29.564C47.1821 29.7 47.0821 29.892 47.0821 30.14C47.0821 30.356 47.1581 30.528 47.3101 30.656C47.4621 30.776 47.6661 30.836 47.9221 30.836ZM57.55 27.488C57.694 27.896 57.766 28.376 57.766 28.928C57.766 29.48 57.69 29.98 57.538 30.428C57.354 30.94 57.062 31.348 56.662 31.652C56.27 31.948 55.782 32.096 55.198 32.096C54.622 32.096 54.174 31.896 53.854 31.496C53.838 31.472 53.822 31.464 53.806 31.472C53.79 31.48 53.782 31.496 53.782 31.52V34.088C53.782 34.128 53.766 34.16 53.734 34.184C53.71 34.216 53.678 34.232 53.638 34.232H52.234C52.194 34.232 52.158 34.216 52.126 34.184C52.102 34.16 52.09 34.128 52.09 34.088V25.976C52.09 25.936 52.102 25.904 52.126 25.88C52.158 25.848 52.194 25.832 52.234 25.832H53.638C53.678 25.832 53.71 25.848 53.734 25.88C53.766 25.904 53.782 25.936 53.782 25.976V26.372C53.782 26.396 53.79 26.412 53.806 26.42C53.822 26.42 53.838 26.412 53.854 26.396C54.19 25.956 54.654 25.736 55.246 25.736C55.798 25.736 56.274 25.892 56.674 26.204C57.082 26.508 57.374 26.936 57.55 27.488ZM55.714 30.176C55.914 29.864 56.014 29.44 56.014 28.904C56.014 28.4 55.93 28 55.762 27.704C55.578 27.36 55.282 27.188 54.874 27.188C54.506 27.188 54.23 27.36 54.046 27.704C53.878 27.992 53.794 28.396 53.794 28.916C53.794 29.452 53.882 29.868 54.058 30.164C54.242 30.484 54.514 30.644 54.874 30.644C55.234 30.644 55.514 30.488 55.714 30.176ZM62.4623 25.976C62.4623 25.936 62.4743 25.904 62.4983 25.88C62.5303 25.848 62.5663 25.832 62.6063 25.832H64.0103C64.0503 25.832 64.0823 25.848 64.1063 25.88C64.1383 25.904 64.1543 25.936 64.1543 25.976V31.856C64.1543 31.896 64.1383 31.932 64.1063 31.964C64.0823 31.988 64.0503 32 64.0103 32H62.6063C62.5663 32 62.5303 31.988 62.4983 31.964C62.4743 31.932 62.4623 31.896 62.4623 31.856V31.448C62.4623 31.424 62.4543 31.412 62.4383 31.412C62.4223 31.404 62.4063 31.412 62.3903 31.436C62.0703 31.868 61.5743 32.084 60.9023 32.084C60.2943 32.084 59.7943 31.9 59.4023 31.532C59.0103 31.164 58.8143 30.648 58.8143 29.984V25.976C58.8143 25.936 58.8263 25.904 58.8503 25.88C58.8823 25.848 58.9183 25.832 58.9583 25.832H60.3503C60.3903 25.832 60.4223 25.848 60.4463 25.88C60.4783 25.904 60.4943 25.936 60.4943 25.976V29.564C60.4943 29.884 60.5783 30.144 60.7463 30.344C60.9223 30.544 61.1623 30.644 61.4663 30.644C61.7383 30.644 61.9623 30.564 62.1383 30.404C62.3143 30.236 62.4223 30.02 62.4623 29.756V25.976ZM67.8613 25.736C68.3813 25.736 68.8453 25.828 69.2533 26.012C69.6613 26.188 69.9773 26.432 70.2013 26.744C70.4333 27.056 70.5493 27.404 70.5493 27.788V31.856C70.5493 31.896 70.5333 31.932 70.5013 31.964C70.4773 31.988 70.4453 32 70.4053 32H69.0013C68.9613 32 68.9253 31.988 68.8933 31.964C68.8693 31.932 68.8573 31.896 68.8573 31.856V31.46C68.8573 31.436 68.8493 31.42 68.8333 31.412C68.8173 31.404 68.8013 31.412 68.7853 31.436C68.4493 31.876 67.9093 32.096 67.1653 32.096C66.5413 32.096 66.0373 31.944 65.6533 31.64C65.2693 31.336 65.0773 30.888 65.0773 30.296C65.0773 29.68 65.2933 29.204 65.7253 28.868C66.1573 28.524 66.7733 28.352 67.5733 28.352H68.7973C68.8373 28.352 68.8573 28.332 68.8573 28.292V28.028C68.8573 27.764 68.7773 27.56 68.6173 27.416C68.4573 27.264 68.2173 27.188 67.8973 27.188C67.6493 27.188 67.4413 27.232 67.2733 27.32C67.1133 27.408 67.0093 27.532 66.9613 27.692C66.9373 27.78 66.8853 27.82 66.8053 27.812L65.3533 27.62C65.2573 27.604 65.2133 27.568 65.2213 27.512C65.2533 27.176 65.3853 26.872 65.6173 26.6C65.8573 26.328 66.1693 26.116 66.5533 25.964C66.9453 25.812 67.3813 25.736 67.8613 25.736ZM67.6213 30.836C67.9653 30.836 68.2573 30.744 68.4973 30.56C68.7373 30.376 68.8573 30.14 68.8573 29.852V29.42C68.8573 29.38 68.8373 29.36 68.7973 29.36H67.9333C67.5733 29.36 67.2893 29.428 67.0813 29.564C66.8813 29.7 66.7813 29.892 66.7813 30.14C66.7813 30.356 66.8573 30.528 67.0093 30.656C67.1613 30.776 67.3653 30.836 67.6213 30.836ZM71.7412 33.176C71.6452 33.176 71.6012 33.124 71.6092 33.02L72.0052 30.236C72.0132 30.148 72.0652 30.104 72.1612 30.104H73.3852C73.4892 30.104 73.5292 30.156 73.5052 30.26L72.7612 33.056C72.7372 33.136 72.6812 33.176 72.5932 33.176H71.7412ZM80.8953 23.588C81.4233 23.588 81.8873 23.696 82.2873 23.912C82.6873 24.128 82.9953 24.436 83.2113 24.836C83.4353 25.228 83.5473 25.68 83.5473 26.192C83.5473 26.696 83.4313 27.14 83.1993 27.524C82.9753 27.908 82.6553 28.208 82.2393 28.424C81.8313 28.632 81.3593 28.736 80.8233 28.736H79.1193C79.0793 28.736 79.0593 28.756 79.0593 28.796V31.856C79.0593 31.896 79.0433 31.932 79.0113 31.964C78.9873 31.988 78.9553 32 78.9153 32H77.5113C77.4713 32 77.4353 31.988 77.4033 31.964C77.3793 31.932 77.3673 31.896 77.3673 31.856V23.732C77.3673 23.692 77.3793 23.66 77.4033 23.636C77.4353 23.604 77.4713 23.588 77.5113 23.588H80.8953ZM80.6433 27.38C81.0113 27.38 81.3073 27.276 81.5313 27.068C81.7553 26.852 81.8673 26.572 81.8673 26.228C81.8673 25.876 81.7553 25.592 81.5313 25.376C81.3073 25.16 81.0113 25.052 80.6433 25.052H79.1193C79.0793 25.052 79.0593 25.072 79.0593 25.112V27.32C79.0593 27.36 79.0793 27.38 79.1193 27.38H80.6433ZM86.8574 25.736C87.3774 25.736 87.8414 25.828 88.2494 26.012C88.6574 26.188 88.9734 26.432 89.1974 26.744C89.4294 27.056 89.5454 27.404 89.5454 27.788V31.856C89.5454 31.896 89.5294 31.932 89.4974 31.964C89.4734 31.988 89.4414 32 89.4014 32H87.9974C87.9574 32 87.9214 31.988 87.8894 31.964C87.8654 31.932 87.8534 31.896 87.8534 31.856V31.46C87.8534 31.436 87.8454 31.42 87.8294 31.412C87.8134 31.404 87.7974 31.412 87.7814 31.436C87.4454 31.876 86.9054 32.096 86.1614 32.096C85.5374 32.096 85.0334 31.944 84.6494 31.64C84.2654 31.336 84.0734 30.888 84.0734 30.296C84.0734 29.68 84.2894 29.204 84.7214 28.868C85.1534 28.524 85.7694 28.352 86.5694 28.352H87.7934C87.8334 28.352 87.8534 28.332 87.8534 28.292V28.028C87.8534 27.764 87.7734 27.56 87.6134 27.416C87.4534 27.264 87.2134 27.188 86.8934 27.188C86.6454 27.188 86.4374 27.232 86.2694 27.32C86.1094 27.408 86.0054 27.532 85.9574 27.692C85.9334 27.78 85.8814 27.82 85.8014 27.812L84.3494 27.62C84.2534 27.604 84.2094 27.568 84.2174 27.512C84.2494 27.176 84.3814 26.872 84.6134 26.6C84.8534 26.328 85.1654 26.116 85.5494 25.964C85.9414 25.812 86.3774 25.736 86.8574 25.736ZM86.6174 30.836C86.9614 30.836 87.2534 30.744 87.4934 30.56C87.7334 30.376 87.8534 30.14 87.8534 29.852V29.42C87.8534 29.38 87.8334 29.36 87.7934 29.36H86.9294C86.5694 29.36 86.2854 29.428 86.0774 29.564C85.8774 29.7 85.7774 29.892 85.7774 30.14C85.7774 30.356 85.8534 30.528 86.0054 30.656C86.1574 30.776 86.3614 30.836 86.6174 30.836ZM96.2453 27.488C96.3893 27.896 96.4613 28.376 96.4613 28.928C96.4613 29.48 96.3853 29.98 96.2333 30.428C96.0493 30.94 95.7573 31.348 95.3573 31.652C94.9653 31.948 94.4773 32.096 93.8933 32.096C93.3173 32.096 92.8693 31.896 92.5493 31.496C92.5333 31.472 92.5173 31.464 92.5013 31.472C92.4853 31.48 92.4773 31.496 92.4773 31.52V34.088C92.4773 34.128 92.4613 34.16 92.4293 34.184C92.4053 34.216 92.3733 34.232 92.3333 34.232H90.9293C90.8893 34.232 90.8533 34.216 90.8213 34.184C90.7973 34.16 90.7853 34.128 90.7853 34.088V25.976C90.7853 25.936 90.7973 25.904 90.8213 25.88C90.8533 25.848 90.8893 25.832 90.9293 25.832H92.3333C92.3733 25.832 92.4053 25.848 92.4293 25.88C92.4613 25.904 92.4773 25.936 92.4773 25.976V26.372C92.4773 26.396 92.4853 26.412 92.5013 26.42C92.5173 26.42 92.5333 26.412 92.5493 26.396C92.8853 25.956 93.3493 25.736 93.9413 25.736C94.4933 25.736 94.9693 25.892 95.3693 26.204C95.7773 26.508 96.0693 26.936 96.2453 27.488ZM94.4093 30.176C94.6093 29.864 94.7093 29.44 94.7093 28.904C94.7093 28.4 94.6253 28 94.4573 27.704C94.2733 27.36 93.9773 27.188 93.5693 27.188C93.2013 27.188 92.9253 27.36 92.7413 27.704C92.5733 27.992 92.4893 28.396 92.4893 28.916C92.4893 29.452 92.5773 29.868 92.7533 30.164C92.9373 30.484 93.2093 30.644 93.5693 30.644C93.9293 30.644 94.2093 30.488 94.4093 30.176ZM101.158 25.976C101.158 25.936 101.17 25.904 101.194 25.88C101.226 25.848 101.262 25.832 101.302 25.832H102.706C102.746 25.832 102.778 25.848 102.802 25.88C102.834 25.904 102.85 25.936 102.85 25.976V31.856C102.85 31.896 102.834 31.932 102.802 31.964C102.778 31.988 102.746 32 102.706 32H101.302C101.262 32 101.226 31.988 101.194 31.964C101.17 31.932 101.158 31.896 101.158 31.856V31.448C101.158 31.424 101.15 31.412 101.134 31.412C101.118 31.404 101.102 31.412 101.086 31.436C100.766 31.868 100.27 32.084 99.5976 32.084C98.9896 32.084 98.4896 31.9 98.0976 31.532C97.7056 31.164 97.5096 30.648 97.5096 29.984V25.976C97.5096 25.936 97.5216 25.904 97.5456 25.88C97.5776 25.848 97.6136 25.832 97.6536 25.832H99.0456C99.0856 25.832 99.1176 25.848 99.1416 25.88C99.1736 25.904 99.1896 25.936 99.1896 25.976V29.564C99.1896 29.884 99.2736 30.144 99.4416 30.344C99.6176 30.544 99.8576 30.644 100.162 30.644C100.434 30.644 100.658 30.564 100.834 30.404C101.01 30.236 101.118 30.02 101.158 29.756V25.976ZM106.557 25.736C107.077 25.736 107.541 25.828 107.949 26.012C108.357 26.188 108.673 26.432 108.897 26.744C109.129 27.056 109.245 27.404 109.245 27.788V31.856C109.245 31.896 109.229 31.932 109.197 31.964C109.173 31.988 109.141 32 109.101 32H107.697C107.657 32 107.621 31.988 107.589 31.964C107.565 31.932 107.553 31.896 107.553 31.856V31.46C107.553 31.436 107.545 31.42 107.529 31.412C107.513 31.404 107.497 31.412 107.481 31.436C107.145 31.876 106.605 32.096 105.861 32.096C105.237 32.096 104.733 31.944 104.349 31.64C103.965 31.336 103.773 30.888 103.773 30.296C103.773 29.68 103.989 29.204 104.421 28.868C104.853 28.524 105.469 28.352 106.269 28.352H107.493C107.533 28.352 107.553 28.332 107.553 28.292V28.028C107.553 27.764 107.473 27.56 107.313 27.416C107.153 27.264 106.913 27.188 106.593 27.188C106.345 27.188 106.137 27.232 105.969 27.32C105.809 27.408 105.705 27.532 105.657 27.692C105.633 27.78 105.581 27.82 105.501 27.812L104.049 27.62C103.953 27.604 103.909 27.568 103.917 27.512C103.949 27.176 104.081 26.872 104.313 26.6C104.553 26.328 104.865 26.116 105.249 25.964C105.641 25.812 106.077 25.736 106.557 25.736ZM106.317 30.836C106.661 30.836 106.953 30.744 107.193 30.56C107.433 30.376 107.553 30.14 107.553 29.852V29.42C107.553 29.38 107.533 29.36 107.493 29.36H106.629C106.269 29.36 105.985 29.428 105.777 29.564C105.577 29.7 105.477 29.892 105.477 30.14C105.477 30.356 105.553 30.528 105.705 30.656C105.857 30.776 106.061 30.836 106.317 30.836ZM117.927 27.62C117.879 27.644 117.879 27.668 117.927 27.692C118.687 28.084 119.067 28.736 119.067 29.648C119.067 30.424 118.803 31.012 118.275 31.412C117.747 31.804 117.055 32 116.199 32H113.091C113.051 32 113.015 31.988 112.983 31.964C112.959 31.932 112.947 31.896 112.947 31.856V23.744C112.947 23.704 112.959 23.672 112.983 23.648C113.015 23.616 113.051 23.6 113.091 23.6H116.103C117.999 23.6 118.947 24.368 118.947 25.904C118.947 26.704 118.607 27.276 117.927 27.62ZM114.699 25.052C114.659 25.052 114.639 25.072 114.639 25.112V26.984C114.639 27.024 114.659 27.044 114.699 27.044H116.103C116.479 27.044 116.771 26.956 116.979 26.78C117.187 26.604 117.291 26.364 117.291 26.06C117.291 25.748 117.187 25.504 116.979 25.328C116.771 25.144 116.479 25.052 116.103 25.052H114.699ZM116.199 30.536C116.567 30.536 116.855 30.444 117.063 30.26C117.271 30.068 117.375 29.808 117.375 29.48C117.375 29.152 117.271 28.896 117.063 28.712C116.855 28.52 116.563 28.424 116.187 28.424H114.699C114.659 28.424 114.639 28.444 114.639 28.484V30.476C114.639 30.516 114.659 30.536 114.699 30.536H116.199ZM122.705 25.736C123.225 25.736 123.689 25.828 124.097 26.012C124.505 26.188 124.821 26.432 125.045 26.744C125.277 27.056 125.393 27.404 125.393 27.788V31.856C125.393 31.896 125.377 31.932 125.345 31.964C125.321 31.988 125.289 32 125.249 32H123.845C123.805 32 123.769 31.988 123.737 31.964C123.713 31.932 123.701 31.896 123.701 31.856V31.46C123.701 31.436 123.693 31.42 123.677 31.412C123.661 31.404 123.645 31.412 123.629 31.436C123.293 31.876 122.753 32.096 122.009 32.096C121.385 32.096 120.881 31.944 120.497 31.64C120.113 31.336 119.921 30.888 119.921 30.296C119.921 29.68 120.137 29.204 120.569 28.868C121.001 28.524 121.617 28.352 122.417 28.352H123.641C123.681 28.352 123.701 28.332 123.701 28.292V28.028C123.701 27.764 123.621 27.56 123.461 27.416C123.301 27.264 123.061 27.188 122.741 27.188C122.493 27.188 122.285 27.232 122.117 27.32C121.957 27.408 121.853 27.532 121.805 27.692C121.781 27.78 121.729 27.82 121.649 27.812L120.197 27.62C120.101 27.604 120.057 27.568 120.065 27.512C120.097 27.176 120.229 26.872 120.461 26.6C120.701 26.328 121.013 26.116 121.397 25.964C121.789 25.812 122.225 25.736 122.705 25.736ZM122.465 30.836C122.809 30.836 123.101 30.744 123.341 30.56C123.581 30.376 123.701 30.14 123.701 29.852V29.42C123.701 29.38 123.681 29.36 123.641 29.36H122.777C122.417 29.36 122.133 29.428 121.925 29.564C121.725 29.7 121.625 29.892 121.625 30.14C121.625 30.356 121.701 30.528 121.853 30.656C122.005 30.776 122.209 30.836 122.465 30.836ZM129.657 25.748C129.945 25.748 130.173 25.804 130.341 25.916C130.405 25.948 130.429 26.008 130.413 26.096L130.161 27.464C130.153 27.56 130.097 27.588 129.993 27.548C129.873 27.508 129.733 27.488 129.573 27.488C129.509 27.488 129.421 27.496 129.309 27.512C129.021 27.536 128.777 27.644 128.577 27.836C128.377 28.02 128.277 28.268 128.277 28.58V31.856C128.277 31.896 128.261 31.932 128.229 31.964C128.205 31.988 128.173 32 128.133 32H126.729C126.689 32 126.653 31.988 126.621 31.964C126.597 31.932 126.585 31.896 126.585 31.856V25.976C126.585 25.936 126.597 25.904 126.621 25.88C126.653 25.848 126.689 25.832 126.729 25.832H128.133C128.173 25.832 128.205 25.848 128.229 25.88C128.261 25.904 128.277 25.936 128.277 25.976V26.432C128.277 26.456 128.285 26.472 128.301 26.48C128.317 26.488 128.329 26.484 128.337 26.468C128.665 25.988 129.105 25.748 129.657 25.748ZM133.568 25.736C134.088 25.736 134.552 25.828 134.96 26.012C135.368 26.188 135.684 26.432 135.908 26.744C136.14 27.056 136.256 27.404 136.256 27.788V31.856C136.256 31.896 136.24 31.932 136.208 31.964C136.184 31.988 136.152 32 136.112 32H134.708C134.668 32 134.632 31.988 134.6 31.964C134.576 31.932 134.564 31.896 134.564 31.856V31.46C134.564 31.436 134.556 31.42 134.54 31.412C134.524 31.404 134.508 31.412 134.492 31.436C134.156 31.876 133.616 32.096 132.872 32.096C132.248 32.096 131.744 31.944 131.36 31.64C130.976 31.336 130.784 30.888 130.784 30.296C130.784 29.68 131 29.204 131.432 28.868C131.864 28.524 132.48 28.352 133.28 28.352H134.504C134.544 28.352 134.564 28.332 134.564 28.292V28.028C134.564 27.764 134.484 27.56 134.324 27.416C134.164 27.264 133.924 27.188 133.604 27.188C133.356 27.188 133.148 27.232 132.98 27.32C132.82 27.408 132.716 27.532 132.668 27.692C132.644 27.78 132.592 27.82 132.512 27.812L131.06 27.62C130.964 27.604 130.92 27.568 130.928 27.512C130.96 27.176 131.092 26.872 131.324 26.6C131.564 26.328 131.876 26.116 132.26 25.964C132.652 25.812 133.088 25.736 133.568 25.736ZM133.328 30.836C133.672 30.836 133.964 30.744 134.204 30.56C134.444 30.376 134.564 30.14 134.564 29.852V29.42C134.564 29.38 134.544 29.36 134.504 29.36H133.64C133.28 29.36 132.996 29.428 132.788 29.564C132.588 29.7 132.488 29.892 132.488 30.14C132.488 30.356 132.564 30.528 132.716 30.656C132.868 30.776 133.072 30.836 133.328 30.836ZM140.859 27.044C140.859 27.084 140.843 27.12 140.811 27.152C140.787 27.176 140.755 27.188 140.715 27.188H139.563C139.523 27.188 139.503 27.208 139.503 27.248V29.792C139.503 30.056 139.555 30.252 139.659 30.38C139.771 30.508 139.947 30.572 140.187 30.572H140.583C140.623 30.572 140.655 30.588 140.679 30.62C140.711 30.644 140.727 30.676 140.727 30.716V31.856C140.727 31.944 140.679 31.996 140.583 32.012C140.247 32.028 140.007 32.036 139.863 32.036C139.199 32.036 138.703 31.928 138.375 31.712C138.047 31.488 137.879 31.072 137.871 30.464V27.248C137.871 27.208 137.851 27.188 137.811 27.188H137.127C137.087 27.188 137.051 27.176 137.019 27.152C136.995 27.12 136.983 27.084 136.983 27.044V25.976C136.983 25.936 136.995 25.904 137.019 25.88C137.051 25.848 137.087 25.832 137.127 25.832H137.811C137.851 25.832 137.871 25.812 137.871 25.772V24.344C137.871 24.304 137.883 24.272 137.907 24.248C137.939 24.216 137.975 24.2 138.015 24.2H139.359C139.399 24.2 139.431 24.216 139.455 24.248C139.487 24.272 139.503 24.304 139.503 24.344V25.772C139.503 25.812 139.523 25.832 139.563 25.832H140.715C140.755 25.832 140.787 25.848 140.811 25.88C140.843 25.904 140.859 25.936 140.859 25.976V27.044Z" fill="#112B3C"/>
              </svg>
            </div>
            <input type="text">
            <svg width="49" height="49" viewBox="0 0 49 49" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle cx="24.6797" cy="24.2" r="24" fill="#3D6299"/>
              </svg>
          </div>
        </div>
      </div>
      <div id="tengahIyaBenar">
        <div class="judulTengahIyaBenar">NUSANTARA</div>
        <div class="deskripsiTengahIyaBenar">Jelajahi, nikmati, dan hidupi keindahan dalam petualangan di Indonesia yang baru dan penuh warna.</div>
      </div>
      <div id="kontenHomePage">
        <div class="kotakKonten">
          <div class="kotakKontenKiri"><img src="{{ asset('assets/img/konten1.png') }}" alt=""></div>
          <div class="kotakKontenKanan">
            <div class="nomorKontenHome">01</div>
            <div class="judulKonten">Wakatobi, Sulawesi</div>
            <div class="deskripsiKonten">Surga tersembunyi di Timur Indonesia yang menakjubkan. Air laut yang jernih memperlihatkan kekayaan terumbu karang yang memikat hati, menyuguhkan panorama bawah laut yang memukau.</div>
          </div>
        </div>
        <div class="kotakKonten">
          <div class="kotakKontenKanan">
            <div class="nomorKontenHome1">02</div>
            <div class="judulKonten1">Raja Ampat, Papua Barat</div>
            <div class="deskripsiKonten1">Permata karang yang mengagumkan di Indonesia. Di antara pulau-pulau terpencil, tersembunyi kekayaan alam yang menakjubkan. Di darat, hamparan pantai pasir putih serta hutan hijau menawarkan keindahan alam yang memesona.</div>
          </div>
          <div class="kotakKontenKiri1"><img src="{{ asset('assets/img/konten2.png') }}" alt=""></div>
        </div>
      </div>
      <div id="artikelDanTentangKami">
        <div class="judulArtikel">Artikel & Tentang Kami</div>
        <div class="deskripsiArtikel"><br>Indonesia, tanah yang memikat dengan sejuta keindahan. Dari ujung barat hingga timur, negara ini menghadirkan ragam pesona alam yang memukau. Gunung menjulang tinggi, hutan hujan yang lebat, pantai-pantai berpasir putih, dan terumbu karang yang mempesona di bawah lautnya. Keberagaman budaya dari Sabang sampai Merauke menawarkan warisan berharga, dari tradisi hingga kuliner yang memikat lidah. Kehangatan sambutan orang-orangnya menjadi cermin keramahan. Keindahan alamnya yang tiada tara, kaya akan flora dan fauna, serta kekayaan budaya membuat Indonesia menjadi destinasi yang tak terlupakan bagi para pelancong yang ingin menjelajahi keajaiban dunia ini. <br><br><br> Kami adalah sekelompok pemuda dan pemudi yang membara dengan semangat untuk menghadirkan keindahan Indonesia ke mata dunia. Dengan cinta yang mendalam pada warisan alam dan budaya yang luar biasa, kami bersatu dalam satu misi: mengenalkan keajaiban Wisata Indonesia kepada dunia.<br><br><br>Kami percaya bahwa Indonesia memiliki kekayaan tak ternilai, mulai dari keindahan alam yang menakjubkan hingga keragaman budaya yang memikat hati. Melalui platform kami, kami berupaya untuk memperkenalkan destinasi wisata yang menakjubkan, menggambarkan keindahan alamnya yang memesona, serta memperkenalkan keanekaragaman budayanya yang kaya dan unik. Dengan semangat kreativitas dan inovasi, kami merangkul teknologi dan media sosial untuk menginspirasi para pelancong, baik lokal maupun mancanegara, agar menjelajahi keindahan Indonesia. Kami berkomitmen untuk menyajikan informasi yang akurat, menggugah rasa ingin tahu, serta memberikan panduan yang bermanfaat bagi mereka yang ingin menjelajahi setiap sudut negeri ini.
          <br><br><br>Kami adalah para pembawa visi, para pemimpi yang berharap untuk membuat setiap perjalanan menjadi pengalaman tak terlupakan. Bersama-sama, kami ingin berbagi pesona Indonesia, membangun pengalaman yang membawa kekaguman akan keindahan alamnya, kehangatan sambutan masyarakatnya, serta kekayaan budayanya yang luar biasa. Bergabunglah dengan kami dalam perjalanan menakjubkan untuk menjelajahi sejuta keindahan Wisata Indonesia.  
        </div>
      </div>
      <div id="dataWelcome">
        <div class="kotakDataWelcome">
          <div class="nilaiKotakDataWelcome">1</div>
          <div class="deskripsiKotakDataWelcome">Negara</div>
        </div>
        <hr>
        <div class="kotakDataWelcome">
          <div class="nilaiKotakDataWelcome">1074</div>
          <div class="deskripsiKotakDataWelcome">Dikunjungi Hari Ini</div>
        </div>
        <hr>
        <div class="kotakDataWelcome">
          <div class="nilaiKotakDataWelcome">38</div>
          <div class="deskripsiKotakDataWelcome">Provinsi</div>
        </div>
        <hr>
        <div class="kotakDataWelcome">
          <div class="nilaiKotakDataWelcome">56</div>
          <div class="deskripsiKotakDataWelcome">Wisata Terdata</div>
        </div>
      </div>
      @include('bagian.footer')
    </div>
  </body>
</html>
 