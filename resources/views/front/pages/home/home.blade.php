@extends('front.layouts.master')
@section('content')
<div id="barba-wrapper">
    <div class="barba-container">
      <header class="l-header l-header--full-height l-header--curtain">
        <div
          class="bg-media bg-media--video"
          data-static-img="https://backpacking-tours.imgix.net/images/tmp/beach-rock-jump.jpg?w=768"
        >
          <video autoplay muted loop id="myVideo">
            <source src="{{ asset('admin/uploads/slider/' . $imgVideo->image_video) }}" type="video/mp4" />
          </video>
        </div>
        <div class="container l-header__container">
          <div class="l-header__content">
            <div class="l-header__content-left">
              <h1 class="headline-1 color-white animation-fadeInRightBig">
                Desert Advanture for solo Travellers
              </h1>
              <p
                class="headline-7 color-white animation-fadeInRightBig animation-delay-1"
              >
                Travel & Make New Friends!
              </p>
            </div>
            <div class="l-header__content-right">
              <a
                href="https://www.youtube.com/watch?v=y34TFgR7RyU"
                class="l-header__button rotate-right js-video"
                aria-label="Watch Video"
                title="Watch Video"
              >
                <svg
                  id="main-banner-btn"
                  class="animation-bounceIn animation-delay-5"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 152.1 208.31"
                  width="152.1px"
                  height="208.31px"
                >
                  <g style="isolation: isolate">
                    <path
                      d="M18.71,175.31c.08,1.43.14,2.85.19,4.28s.07,2.86.06,4.29-.06,2.85-.15,4.27-.23,2.86-.43,4.29l-.2,1.42.2.38.31.57.27.55a1.81,1.81,0,0,1,.13.35.42.42,0,0,1-.17.36,1.38,1.38,0,0,1-.42.21,2.71,2.71,0,0,1-.51.1,4.12,4.12,0,0,1-.42,0h-.36a1.27,1.27,0,0,1-.34,0,1.2,1.2,0,0,1-.56-.29,3.49,3.49,0,0,1-.36-.51,22.86,22.86,0,0,1-1.45-2.83c-.42-1-.8-2-1.13-3s-.65-2-.92-3.08-.55-2.07-.8-3.1a90.74,90.74,0,0,1-1.4,11.59c.12.2.25.43.4.67a1.5,1.5,0,0,1,.24.74.48.48,0,0,1-.14.39.78.78,0,0,1-.38.21,2,2,0,0,1-.49.09,3.47,3.47,0,0,1-.43,0l-.1.05a.29.29,0,0,1-.14,0,1.35,1.35,0,0,1-1-.32,2.73,2.73,0,0,1-.61-.86,33.39,33.39,0,0,1-1.27-3.33c-.38-1.18-.72-2.38-1-3.59s-.56-2.44-.8-3.65-.44-2.39-.62-3.53c-.23-1.39-.47-2.77-.69-4.14a36.09,36.09,0,0,1-.45-4.18,1.37,1.37,0,0,1,.07-.58c.07-.14.24-.22.52-.23a2.15,2.15,0,0,1,1,.15,1.25,1.25,0,0,1,.57.52,2.26,2.26,0,0,1,.29.78c.06.3.11.63.15,1,.37,2.58.8,5.16,1.27,7.71a70.41,70.41,0,0,0,1.86,7.58c.23-1.64.39-3.29.47-4.93s.17-3.28.24-4.93q0-.65,0-1.32c0-.45,0-.9,0-1.35s0-.9.06-1.35a7.28,7.28,0,0,1,.2-1.31,1.76,1.76,0,0,1,.46-.89,1.51,1.51,0,0,1,.95-.35,1.45,1.45,0,0,1,1,.22,1.77,1.77,0,0,1,.55.63,3,3,0,0,1,.3.87c.07.33.12.63.17.92.4,2.11.87,4.18,1.43,6.23s1.21,4.08,1.94,6.1c.14-1.83.19-3.65.15-5.45s-.1-3.63-.2-5.47c-.06-1-.12-2.08-.19-3.14s-.21-2.1-.39-3.16a1.7,1.7,0,0,0-.06-.35,3.27,3.27,0,0,1,0-.35.62.62,0,0,1,.2-.55,1,1,0,0,1,.57-.2,4.44,4.44,0,0,1,.5,0,3.33,3.33,0,0,1,.55.1,2.64,2.64,0,0,1,.52.17,1.1,1.1,0,0,1,.4.28.94.94,0,0,1,.13.38c0,.2.08.44.12.71s.07.58.1.9.05.62.07.91,0,.55.05.79S18.71,175.2,18.71,175.31Z"
                      style="fill: #fff"
                    />
                    <path
                      d="M30.8,195.07a.57.57,0,0,1-.15.49.74.74,0,0,1-.48.16,1.44,1.44,0,0,1-1.21-.37,2.82,2.82,0,0,1-.6-1.13c0-.17-.09-.33-.13-.5s-.08-.33-.11-.49a2.4,2.4,0,0,0-.09-.32,1.16,1.16,0,0,1-.09-.33,10.69,10.69,0,0,1-.46,1.09,6.07,6.07,0,0,1-.66,1.06,3.87,3.87,0,0,1-.86.81,2.08,2.08,0,0,1-1.08.36,1.76,1.76,0,0,1-1.07-.26,2,2,0,0,1-.7-.73,3.32,3.32,0,0,1-.39-1,7,7,0,0,1-.15-1.07,15.65,15.65,0,0,1,.1-2.6,23.72,23.72,0,0,1,.51-2.83,24,24,0,0,1,.84-2.73,13.66,13.66,0,0,1,1.11-2.33v0l.1-.16.41-.6a.77.77,0,0,1,.59-.33.73.73,0,0,1,.6.25,1.91,1.91,0,0,1,.38.59,2.94,2.94,0,0,1,.75.18,1.41,1.41,0,0,1,.46.3,1,1,0,0,1,.23.44,2.35,2.35,0,0,1,.08.55c0,.08,0,.17,0,.26a2.53,2.53,0,0,1,0,.28v.34c0,.13,0,.25,0,.35a2.8,2.8,0,0,0,.09.46c0,.18.1.37.16.57l.16.64c.07.34.14.72.21,1.15s.13.86.22,1.29.14.87.21,1.29.13.79.2,1.14l.55,2.57.07.3c0,.15.07.29.1.42A1.76,1.76,0,0,1,30.8,195.07Zm-4.55-9.88a.36.36,0,0,0,0-.11c0-.05,0-.11,0-.17a14.26,14.26,0,0,0-.61,1.91,20.64,20.64,0,0,0-.4,2.08c-.1.7-.16,1.41-.19,2.11s0,1.36,0,2a.71.71,0,0,0,0,.15.59.59,0,0,0,0,.14v0a6.51,6.51,0,0,0,.64-1.75,21.65,21.65,0,0,0,.4-2.26c.1-.78.16-1.54.19-2.28S26.27,185.67,26.25,185.19Z"
                      style="fill: #fff"
                    />
                    <path
                      d="M37.4,194.51a.58.58,0,0,1-.07.33.88.88,0,0,1-.21.22,1.36,1.36,0,0,1-.28.11l-.28,0a2.39,2.39,0,0,1-.45,0,2.89,2.89,0,0,1-.51-.11,2.11,2.11,0,0,1-.46-.19,1,1,0,0,1-.33-.31,2.31,2.31,0,0,1-.21-.65c-.07-.32-.14-.69-.2-1.12s-.11-.88-.16-1.36-.09-.95-.13-1.39-.08-.85-.1-1.2,0-.63,0-.8c0-.82-.07-1.61-.08-2.38s0-1.56,0-2.37a.57.57,0,0,0-.18,0l-.17,0-.46.08-.48,0a1.34,1.34,0,0,1-.54-.07.49.49,0,0,1-.25-.47,1.12,1.12,0,0,1,.16-.71,1.33,1.33,0,0,1,.47-.44,2.17,2.17,0,0,1,.63-.24c.24-.05.46-.1.68-.13l.07,0h.07c0-.14,0-.31,0-.52v-.68c0-.38,0-.8,0-1.24v-1.27c0-.4,0-.76,0-1.07A4.88,4.88,0,0,1,34,176a1,1,0,0,1,.19-.38.52.52,0,0,1,.42-.17,1.36,1.36,0,0,1,1.11.4,1.74,1.74,0,0,1,.45,1.1c0,.52,0,1,0,1.55s0,1,0,1.57v.9a6.87,6.87,0,0,0,.87-.21l.84-.2a5.1,5.1,0,0,1,.84-.11.75.75,0,0,1,.55.15.72.72,0,0,1,.22.53,2.21,2.21,0,0,1-.1.76,1,1,0,0,1-.46.59h0a3.42,3.42,0,0,1-.42.11c-.23.06-.5.11-.79.16l-.88.15-.63.11h0c0,.66,0,1.3.05,1.94s0,1.29.08,1.94c0,.9.13,1.86.24,2.87s.24,2,.42,2.87l.18.78c.06.2.11.39.16.59A3.78,3.78,0,0,1,37.4,194.51Z"
                      style="fill: #fff"
                    />
                    <path
                      d="M48.58,190.42a2.89,2.89,0,0,1-.08.76,6,6,0,0,1-.25.75,6.59,6.59,0,0,1-.45,1,4.87,4.87,0,0,1-.64.9,3.37,3.37,0,0,1-.85.65,2.7,2.7,0,0,1-1.09.29,3,3,0,0,1-1.84-.45A4,4,0,0,1,42.17,193a6.46,6.46,0,0,1-.69-1.78,11.73,11.73,0,0,1-.26-1.85c0-.43,0-1,0-1.54s0-1.21.11-1.84a12.54,12.54,0,0,1,.34-1.91,7.6,7.6,0,0,1,.65-1.7,4,4,0,0,1,1.06-1.24,2.63,2.63,0,0,1,1.54-.54,3.37,3.37,0,0,1,.57,0,4.94,4.94,0,0,1,.74.17,2.3,2.3,0,0,1,.65.31.64.64,0,0,1,.3.49.45.45,0,0,1-.22.41,1.73,1.73,0,0,1-.55.24,3.5,3.5,0,0,1-.66.1l-.56,0-.31,0a3.18,3.18,0,0,0-.74,1.33,11.51,11.51,0,0,0-.4,1.84,18.08,18.08,0,0,0-.14,1.92c0,.63,0,1.14,0,1.54a10.07,10.07,0,0,0,.22,1.65,4.55,4.55,0,0,0,.62,1.51,2.21,2.21,0,0,0,.27.35.48.48,0,0,0,.39.18c.1,0,.21-.1.31-.28a3.72,3.72,0,0,0,.27-.63,4.88,4.88,0,0,0,.19-.7c0-.22.08-.39.1-.5a.76.76,0,0,0,0-.16,1,1,0,0,0,0-.17c0-.11,0-.21,0-.31a.75.75,0,0,1,0-.24.77.77,0,0,1,.3-.42,1,1,0,0,1,.49-.13,2.25,2.25,0,0,1,.57,0,1.94,1.94,0,0,1,.57.2,1.3,1.3,0,0,1,.46.38A1,1,0,0,1,48.58,190.42Z"
                      style="fill: #fff"
                    />
                    <path
                      d="M59.68,192.82a.57.57,0,0,1-.2.53,1,1,0,0,1-.55.18,2.2,2.2,0,0,1-.44,0l-.45-.07a1.89,1.89,0,0,1-.58-.23,1.21,1.21,0,0,1-.33-.35,1.1,1.1,0,0,1-.15-.44c0-.16,0-.34-.08-.54a.81.81,0,0,0,0-.16.59.59,0,0,1,0-.14c-.07-.66-.14-1.35-.2-2.05s-.12-1.38-.16-2.05c0-.34,0-.68,0-1l0-1c0-.34,0-.67,0-1s0-.67,0-1a1.36,1.36,0,0,0,0-.2,1.77,1.77,0,0,0,0-.2,8.31,8.31,0,0,0-.72,1.53,15.41,15.41,0,0,0-.51,1.71q-.22.88-.36,1.77c-.09.58-.17,1.14-.22,1.67l0,.37c0,.41-.08.84-.11,1.27a7.71,7.71,0,0,0,0,1.27,2.22,2.22,0,0,0,.12.58c0,.09,0,.18.07.27a1.32,1.32,0,0,1,0,.32.62.62,0,0,1-.18.58.9.9,0,0,1-.55.18,2.51,2.51,0,0,1-.47,0,2,2,0,0,1-.49-.09,1.7,1.7,0,0,1-.46-.18.91.91,0,0,1-.35-.29,5.11,5.11,0,0,1-.27-1.2c-.1-.66-.2-1.47-.3-2.44s-.22-2.05-.33-3.26-.22-2.45-.32-3.73-.22-2.53-.31-3.78-.18-2.4-.25-3.46-.14-2-.19-2.74S50,172,50,171.72a1.94,1.94,0,0,1,.07-.65c0-.19.23-.3.53-.32a1.9,1.9,0,0,1,.91.18,1.31,1.31,0,0,1,.65.64,2.26,2.26,0,0,1,.1.56c0,.34.09.76.14,1.28s.1,1.12.16,1.79.12,1.37.18,2.09.13,1.44.19,2.16.12,1.4.18,2l.22,2.6a10.58,10.58,0,0,1,.47-1.17,6,6,0,0,1,.67-1.13,3.82,3.82,0,0,1,.89-.86,2.11,2.11,0,0,1,1.13-.37,1.66,1.66,0,0,1,1.23.34,2.37,2.37,0,0,1,.71,1,4.32,4.32,0,0,1,.34,1.27c.06.45.1.87.12,1.24s0,.47,0,.69,0,.44,0,.67,0,.46,0,.69l0,.7c0,.8.1,1.63.18,2.48a19,19,0,0,0,.4,2.49l.05.24q0,.1.06.24A1.3,1.3,0,0,1,59.68,192.82Z"
                      style="fill: #fff"
                    />
                    <path
                      d="M74,192.58a.58.58,0,0,1-.07.33.53.53,0,0,1-.21.21.9.9,0,0,1-.27.11,1.6,1.6,0,0,1-.29.05,3.7,3.7,0,0,1-.45,0,3.1,3.1,0,0,1-.51-.11,2.11,2.11,0,0,1-.46-.19.87.87,0,0,1-.32-.31,2.06,2.06,0,0,1-.22-.65,11.24,11.24,0,0,1-.19-1.12c-.06-.42-.12-.88-.16-1.36s-.1-1-.14-1.4-.07-.84-.1-1.2,0-.62,0-.8c0-.81-.07-1.61-.08-2.38s0-1.55,0-2.36l-.17,0-.18,0-.46.08-.48,0a1.12,1.12,0,0,1-.53-.08c-.16-.06-.24-.21-.26-.46a1.19,1.19,0,0,1,.16-.71,1.33,1.33,0,0,1,.47-.44,2.12,2.12,0,0,1,.64-.24c.23-.06.45-.1.68-.14h.14v-1.2c0-.39,0-.8,0-1.24v-1.27c0-.4,0-.76,0-1.07a4.48,4.48,0,0,1,.08-.67,1.49,1.49,0,0,1,.18-.38.55.55,0,0,1,.42-.16,1.36,1.36,0,0,1,1.11.4,1.69,1.69,0,0,1,.45,1.1c0,.52,0,1,0,1.55s0,1,0,1.57V179a6.45,6.45,0,0,0,.87-.2l.85-.2a6.15,6.15,0,0,1,.83-.12.74.74,0,0,1,.55.16.67.67,0,0,1,.22.52,2,2,0,0,1-.1.77,1,1,0,0,1-.46.58h0a1.91,1.91,0,0,1-.42.12c-.23,0-.49.11-.79.16l-.87.15-.64.1h0c0,.65,0,1.3,0,1.94s0,1.28.09,1.94c0,.9.12,1.85.23,2.86s.25,2,.42,2.88l.18.78c.06.2.11.39.16.58A3.72,3.72,0,0,1,74,192.58Z"
                      style="fill: #fff"
                    />
                    <path
                      d="M87.21,191.37a.55.55,0,0,1-.2.52,1,1,0,0,1-.55.19,2.2,2.2,0,0,1-.44,0l-.45-.08a1.49,1.49,0,0,1-.58-.23,1.18,1.18,0,0,1-.33-.34,1.27,1.27,0,0,1-.15-.44c0-.17-.05-.35-.07-.55,0,0,0-.11,0-.15a.78.78,0,0,1,0-.14c-.07-.67-.14-1.35-.2-2s-.12-1.39-.16-2.05c0-.34,0-.68,0-1l0-1c0-.34,0-.68,0-1s0-.67,0-1a1.23,1.23,0,0,0,0-.2,1.55,1.55,0,0,0,0-.21,9,9,0,0,0-.72,1.53,16.25,16.25,0,0,0-.51,1.72c-.15.59-.27,1.17-.36,1.76s-.17,1.14-.22,1.68l0,.37c0,.41-.08.83-.11,1.26a9.14,9.14,0,0,0,0,1.28,2.16,2.16,0,0,0,.12.57c0,.1.05.19.07.27a2.32,2.32,0,0,1,0,.33.69.69,0,0,1-.18.58,1.09,1.09,0,0,1-.56.18H80.9a3.86,3.86,0,0,1-.49-.09,3.14,3.14,0,0,1-.46-.18,1,1,0,0,1-.35-.3,5.11,5.11,0,0,1-.27-1.2q-.15-1-.3-2.43c-.11-1-.21-2.06-.32-3.27s-.23-2.45-.33-3.72-.21-2.54-.31-3.79-.18-2.4-.25-3.45-.14-2-.19-2.75-.09-1.32-.11-1.64a1.88,1.88,0,0,1,.07-.64c0-.2.23-.31.53-.32a1.9,1.9,0,0,1,.91.17,1.31,1.31,0,0,1,.65.64,2.53,2.53,0,0,1,.1.57c0,.33.09.76.14,1.28s.11,1.11.17,1.78.12,1.37.18,2.09l.18,2.16q.09,1.09.18,2l.22,2.59a10.58,10.58,0,0,1,.47-1.17,6.35,6.35,0,0,1,.67-1.13,3.77,3.77,0,0,1,.89-.85,2.12,2.12,0,0,1,1.13-.38,1.7,1.7,0,0,1,1.23.34,2.6,2.6,0,0,1,.72,1,5.08,5.08,0,0,1,.34,1.26c.06.46.09.87.11,1.25,0,.23,0,.46,0,.68s0,.45,0,.67,0,.47,0,.7l0,.69c0,.81.1,1.64.18,2.48a18.46,18.46,0,0,0,.4,2.49l.05.24a1.31,1.31,0,0,1,.06.25A1.22,1.22,0,0,1,87.21,191.37Z"
                      style="fill: #fff"
                    />
                    <path
                      d="M97.2,188.57a2.39,2.39,0,0,1-.24,1.1,4.08,4.08,0,0,1-.69,1.07,4,4,0,0,1-1,.82,2.57,2.57,0,0,1-1.15.36,2.88,2.88,0,0,1-1.44-.25,3.6,3.6,0,0,1-1.09-.82,4.77,4.77,0,0,1-.77-1.22,8.67,8.67,0,0,1-.51-1.43,12.52,12.52,0,0,1-.3-1.48c-.06-.49-.11-.94-.13-1.35s0-.77,0-1.25a13.46,13.46,0,0,1,.14-1.51,10.71,10.71,0,0,1,.33-1.55,5.74,5.74,0,0,1,.59-1.38,3.52,3.52,0,0,1,.89-1,2.36,2.36,0,0,1,1.26-.44,2.29,2.29,0,0,1,1,.18,2.22,2.22,0,0,1,.78.57,2.76,2.76,0,0,1,.52.84,2.9,2.9,0,0,1,.22,1,4.06,4.06,0,0,1-.23,1.51,8,8,0,0,1-.74,1.6,7.16,7.16,0,0,1-1.05,1.42,5,5,0,0,1-1.19,1c0,.21.1.52.19.91a8.16,8.16,0,0,0,.36,1.19,4.84,4.84,0,0,0,.49,1,.72.72,0,0,0,.63.4.47.47,0,0,0,.3-.12,1,1,0,0,0,.22-.29,2.4,2.4,0,0,0,.17-.4l.12-.41.1-.25,0-.08,0-.05.21-.43a1,1,0,0,1,.31-.35h0a.3.3,0,0,1,.15-.09l.15,0a1.06,1.06,0,0,1,.43.1,2,2,0,0,1,.43.29,1.76,1.76,0,0,1,.34.39A.89.89,0,0,1,97.2,188.57ZM93.31,181c0-.12,0-.24,0-.37a1.15,1.15,0,0,0-.1-.33,2.73,2.73,0,0,0-.39.74,6,6,0,0,0-.27.88c-.06.3-.11.6-.15.91s-.06.59-.07.85a6.39,6.39,0,0,0,.74-1.28A3.1,3.1,0,0,0,93.31,181Z"
                      style="fill: #fff"
                    />
                    <path
                      d="M112.84,178.2a30.67,30.67,0,0,1-.12,4.8c-.17,1.58-.39,3.16-.66,4.73a2.73,2.73,0,0,0-.07.39c0,.35-.11.7-.16,1.06a4.88,4.88,0,0,1-.31,1.08,2.38,2.38,0,0,1-.58.8,1.34,1.34,0,0,1-.85.37,1.22,1.22,0,0,1-.41-.07l-.47-.2a1.49,1.49,0,0,1-.56-.65,8.31,8.31,0,0,1-.35-.87l0-.12v0c-.24-.75-.44-1.51-.62-2.26l-.51-2.28c-.1-.48-.19-.95-.29-1.42s-.2-.94-.32-1.4l-.3-1c-.07-.23-.15-.48-.23-.76s-.15-.53-.22-.77-.13-.46-.18-.65a2.72,2.72,0,0,1-.07-.39.46.46,0,0,1,.19-.46,1,1,0,0,1,.5-.14,1.93,1.93,0,0,1,1,.19,1.42,1.42,0,0,1,.67.78c.08.19.15.4.22.62s.12.44.17.66c.24.76.47,1.57.7,2.42s.42,1.67.59,2.46l.21.88a1.15,1.15,0,0,1,0,.14.2.2,0,0,0,0,.09.51.51,0,0,0,0,.09l0,.15c.19-1.25.35-2.5.45-3.76a26.51,26.51,0,0,0,.07-3.78,4.52,4.52,0,0,0-.09-.75c0-.25-.08-.5-.13-.77s-.1-.5-.14-.76a7,7,0,0,1-.08-.79.55.55,0,0,1,.2-.53,1.12,1.12,0,0,1,.55-.17,4.42,4.42,0,0,1,.74,0,1.56,1.56,0,0,1,.59.17,1.17,1.17,0,0,1,.43.4,2.1,2.1,0,0,1,.25.7c0,.27.06.55.09.87S112.83,177.92,112.84,178.2Z"
                      style="fill: #fff"
                    />
                    <path
                      d="M118.1,175.88a.61.61,0,0,1-.11.44.77.77,0,0,1-.48.16c-.1,0-.27,0-.49,0a5.46,5.46,0,0,1-.69-.1,2.19,2.19,0,0,1-.61-.21.47.47,0,0,1-.27-.37c0-.05,0-.18,0-.4s.06-.45.1-.7.07-.48.1-.68a1.22,1.22,0,0,1,.08-.34v0a.37.37,0,0,1,.2-.19,1,1,0,0,1,.25,0,2.08,2.08,0,0,1,.41,0l.52.09a2.87,2.87,0,0,1,.47.18.58.58,0,0,1,.28.25,1.14,1.14,0,0,1,.08.38,3.24,3.24,0,0,1,0,.43V175a1,1,0,0,0,0,.15c0,.06,0,.12,0,.18a1,1,0,0,0,0,.17l0,.19Zm1.38,14a.71.71,0,0,1-.15.58.89.89,0,0,1-.58.2,2.64,2.64,0,0,1-.47,0,4.05,4.05,0,0,1-.5-.12,2.26,2.26,0,0,1-.47-.22A1,1,0,0,1,117,190a2.06,2.06,0,0,1-.15-.65q-.09-.54-.15-1.35c0-.53-.1-1.14-.15-1.8s-.1-1.34-.14-2-.09-1.34-.12-2-.06-1.21-.09-1.69l-.07-1.35c0-.12,0-.23,0-.35a1,1,0,0,1,0-.31.53.53,0,0,1,.19-.23.63.63,0,0,1,.37-.11,1.42,1.42,0,0,1,1.16.37,2.15,2.15,0,0,1,.5,1.13c.1.71.18,1.42.25,2.12s.13,1.43.19,2.15.11,1.3.16,1.94.13,1.27.22,1.9c0,.12,0,.25,0,.36s0,.24.07.35.08.46.11.69A5.34,5.34,0,0,1,119.48,189.84Z"
                      style="fill: #fff"
                    />
                    <path
                      d="M130.72,189.47a.51.51,0,0,1-.07.33.66.66,0,0,1-.21.23,1.11,1.11,0,0,1-.27.12l-.29.06-.46,0a3.07,3.07,0,0,1-.5-.13,1.78,1.78,0,0,1-.46-.22.92.92,0,0,1-.32-.33A1.36,1.36,0,0,1,128,189c0-.19-.08-.39-.11-.58a6.92,6.92,0,0,1-.37.84,3.08,3.08,0,0,1-.53.75,2.91,2.91,0,0,1-.72.53,2.39,2.39,0,0,1-.91.23,2.34,2.34,0,0,1-1.47-.35,2.88,2.88,0,0,1-.92-1,4.49,4.49,0,0,1-.48-1.39,10.91,10.91,0,0,1-.17-1.46c0-.38,0-.82,0-1.32s0-1,.06-1.51.08-1,.13-1.52.12-.92.2-1.3.21-.92.35-1.45a7.5,7.5,0,0,1,.57-1.5,4.36,4.36,0,0,1,.92-1.2,2.46,2.46,0,0,1,1.36-.6c-.09-.94-.18-1.81-.29-2.61s-.22-1.62-.33-2.46l-.28-1.94-.11-.7c0-.18-.06-.37-.08-.57s0-.38-.05-.56a.67.67,0,0,1,.19-.58,1,1,0,0,1,.56-.19,2.5,2.5,0,0,1,1.19.17,1.25,1.25,0,0,1,.6.58,2.43,2.43,0,0,1,.24.9c0,.34.05.72.07,1.11a5.2,5.2,0,0,0,.14.87l.12.65.23,1.78.12.84c0,.28.08.56.11.84l.57,3.76,1.08,7,.08.64c.08.48.15,1,.21,1.49a11,11,0,0,0,.32,1.51l.12.37A1.93,1.93,0,0,1,130.72,189.47Zm-4.63-10.05c0-.13,0-.27,0-.43s0-.31,0-.45l0-.47c-.08.12-.17.29-.29.5a3.56,3.56,0,0,0-.27.57,8.42,8.42,0,0,0-.43,1.6c-.12.64-.21,1.32-.29,2s-.12,1.38-.14,2.05a15.17,15.17,0,0,0,0,1.66c0,.17,0,.35,0,.56a3.52,3.52,0,0,0,.09.64,4.44,4.44,0,0,0,.19.62,1.48,1.48,0,0,0,.31.47,3.34,3.34,0,0,0,.42-1,12.35,12.35,0,0,0,.27-1.6c.07-.6.13-1.22.16-1.88s.06-1.3.07-1.92,0-1.18,0-1.69S126.1,179.71,126.09,179.42Z"
                      style="fill: #fff"
                    />
                    <path
                      d="M140.42,186.29a2.39,2.39,0,0,1-.23,1.1,4.88,4.88,0,0,1-.69,1.07,4.18,4.18,0,0,1-1,.81,2.53,2.53,0,0,1-1.15.36,2.88,2.88,0,0,1-1.44-.25,3.17,3.17,0,0,1-1.08-.82,4.9,4.9,0,0,1-.78-1.22,9.57,9.57,0,0,1-.51-1.42,11,11,0,0,1-.29-1.48c-.07-.5-.12-.95-.14-1.36s0-.77,0-1.25a13.42,13.42,0,0,1,.13-1.5,10.44,10.44,0,0,1,.33-1.55,6.25,6.25,0,0,1,.59-1.39,3.36,3.36,0,0,1,.89-1,2.21,2.21,0,0,1,1.26-.44,2.16,2.16,0,0,1,1,.18,2.23,2.23,0,0,1,.79.56,2.89,2.89,0,0,1,.52.85,3.09,3.09,0,0,1,.22,1,4.27,4.27,0,0,1-.24,1.51,8.58,8.58,0,0,1-.73,1.61,8.33,8.33,0,0,1-1.06,1.42,5.49,5.49,0,0,1-1.18,1c0,.2.09.51.19.91a10.11,10.11,0,0,0,.35,1.19,5,5,0,0,0,.49,1,.75.75,0,0,0,.63.41.51.51,0,0,0,.3-.12,1,1,0,0,0,.22-.3,2.3,2.3,0,0,0,.17-.39c0-.15.09-.28.13-.42l.09-.25,0-.07,0-.05.22-.44a1.1,1.1,0,0,1,.3-.35h0a.23.23,0,0,1,.14-.08l.15,0a.92.92,0,0,1,.43.1,2,2,0,0,1,.44.28,2,2,0,0,1,.33.39A.89.89,0,0,1,140.42,186.29Zm-3.89-7.56a2.4,2.4,0,0,0,0-.37,1,1,0,0,0-.11-.33,3.35,3.35,0,0,0-.39.73,5.54,5.54,0,0,0-.26.88,9.3,9.3,0,0,0-.16.92c0,.3-.06.59-.07.84a5.91,5.91,0,0,0,.75-1.28A3,3,0,0,0,136.53,178.73Z"
                      style="fill: #fff"
                    />
                    <path
                      d="M150.45,181.76a19.56,19.56,0,0,1-.09,3.06,8.47,8.47,0,0,1-.9,2.92,5.85,5.85,0,0,1-.52.81,4.52,4.52,0,0,1-.65.73,3.83,3.83,0,0,1-.8.53,2.28,2.28,0,0,1-.93.23,2.42,2.42,0,0,1-1.36-.28,3.42,3.42,0,0,1-1-.9,6.06,6.06,0,0,1-.75-1.3,8.8,8.8,0,0,1-.5-1.5,14.91,14.91,0,0,1-.3-1.51c-.06-.49-.11-.92-.13-1.3s0-.88,0-1.39,0-1,.11-1.55.15-1.06.26-1.58a7.8,7.8,0,0,1,.5-1.48,5.78,5.78,0,0,1,.78-1.26,4,4,0,0,1,1.09-.91v0a2.34,2.34,0,0,1,1.1-.36.88.88,0,0,1,.55.12.56.56,0,0,1,.21.49,2.55,2.55,0,0,1,1.61.85,5.57,5.57,0,0,1,1,1.71,10,10,0,0,1,.55,2C150.35,180.64,150.42,181.24,150.45,181.76Zm-4.2-4.18a.85.85,0,0,1-.57-.2,5,5,0,0,0-.5,1.2,8.76,8.76,0,0,0-.29,1.37,13.2,13.2,0,0,0-.11,1.4c0,.47,0,.91,0,1.32s.06.78.13,1.31a14.71,14.71,0,0,0,.28,1.59,8.15,8.15,0,0,0,.51,1.49,2.31,2.31,0,0,0,.76,1,2.36,2.36,0,0,0,.85-1.06,6.69,6.69,0,0,0,.49-1.55,10.42,10.42,0,0,0,.2-1.68,14.06,14.06,0,0,0,0-1.44c0-.3-.06-.67-.12-1.14s-.14-.94-.25-1.42a8.88,8.88,0,0,0-.41-1.35,2.3,2.3,0,0,0-.61-.91A1.29,1.29,0,0,1,146.25,177.58Z"
                      style="fill: #fff"
                    />
                  </g>
                  <path
                    d="M98.33,140.45S-6.41,147.38,5.27,63.7,99.15,6.82,106,8.82s44.09,8.28,33.6,75.34c-5,32.12-26.59,33.16-42.62,42.93-17.31,10.57-28.35,20.58-30.42,27.44"
                    style="
                      fill: none;
                      stroke: #fff;
                      stroke-linecap: round;
                      stroke-linejoin: round;
                      stroke-width: 5px;
                    "
                  />
                  <path
                    d="M98.63,71.42l-.2-.56-.49-.17a.91.91,0,0,0-.51-.06c-1.75-.95-8-5.33-13.55-9.24C64.16,47.55,61.21,45.86,59.93,46.51a1.11,1.11,0,0,0-.63,1c0,.52,0,2.45.08,5.37.2,10.6.76,38.75-.8,42h0a1.25,1.25,0,0,0,.22,1.57,1.08,1.08,0,0,0,.75.28c1.54,0,5.49-2.47,20.85-13,6.64-4.53,14.8-10.11,16.87-11a.87.87,0,0,0,1-.15A1.05,1.05,0,0,0,98.63,71.42ZM59.48,95.26Zm.9.45-.29-.14h0l.28.14Z"
                    style="fill: #6d4aff"
                  />
                </svg>
              </a>
            </div>
          </div>
          <a
            class="l-header__btn"
            href="#tours"
            title="Explore Tours"
            aria-label="Explore Tours"
          >
            <div class="l-header__btn-icon">
              <svg
                width="40"
                height="20"
                aria-hidden="true"
                focusable="false"
              >
                <use
                  xlink:href="images/icons.svg#icon-select-dropdown-icon"
                ></use>
              </svg>
            </div>
            <span class="l-header__btn-text"> Explore Tours </span>
          </a>
        </div>
      </header>
      <main id="main" class="l-main mt-5em">
        <section class="section section--p-none-bottom">
          <div class="headline-container">
            <h2 class="headline-10 headline-pad-mob text-center">
              Our Tours
            </h2>
          </div>
          <div class="tab-box">
            <ul class="tab-box-nav js-tab-box-nav container-extra-large">
              <li
                class="tab-box-nav__item js-tabBtn active"
                data-name="tab-2"
              >
                <button class="tab-box-btn tab-box-btn--blue" type="button">
                  <span class="tab-box-btn__icon tab-box-btn__icon--blue">
                    <svg>
                      <use xlink:href="images/icons.svg#icon-vietnam"></use>
                    </svg>
                  </span>
                  Jet Skis
                </button>
              </li>
              <li class="tab-box-nav__item js-tabBtn" data-name="tab-7">
                <button class="tab-box-btn tab-box-btn--green" type="button">
                  <span class="tab-box-btn__icon tab-box-btn__icon--green">
                    <svg>
                      <use xlink:href="images/icons.svg#icon-sri-lanka"></use>
                    </svg>
                  </span>
                  Quad Biking
                </button>
              </li>
              <li class="tab-box-nav__item js-tabBtn" data-name="tab-1">
                <button class="tab-box-btn tab-box-btn--orange" type="button">
                  <span class="tab-box-btn__icon tab-box-btn__icon--orange">
                    <svg>
                      <use xlink:href="images/icons.svg#icon-thailand"></use>
                    </svg>
                  </span>
                  Dune Buggy
                </button>
              </li>
              <li class="tab-box-nav__item js-tabBtn" data-name="tab-6">
                <button
                  class="tab-box-btn tab-box-btn--orangeBlood"
                  type="button"
                >
                  <span
                    class="tab-box-btn__icon tab-box-btn__icon--orangeBlood"
                  >
                    <svg>
                      <use xlink:href="images/icons.svg#icon-cambodia"></use>
                    </svg>
                  </span>
                  Other Desert Adventures
                </button>
              </li>
              <li class="tab-box-nav__item js-tabBtn" data-name="tab-3">
                <button
                  class="tab-box-btn tab-box-btn--blurple"
                  type="button"
                >
                  <span class="tab-box-btn__icon tab-box-btn__icon--blurple">
                    <svg>
                      <use xlink:href="images/icons.svg#icon-bali"></use>
                    </svg>
                  </span>
                  Luxury Yachts
                </button>
              </li>
              <li class="tab-box-nav__item js-tabBtn" data-name="tab-8">
                <button class="tab-box-btn tab-box-btn--purple" type="button">
                  <span class="tab-box-btn__icon tab-box-btn__icon--purple">
                    <svg>
                      <use xlink:href="images/icons.svg#icon-vietnam"></use>
                    </svg>
                  </span>
                  All Other Tours
                </button>
              </li>
            </ul>
            <div
              class="tab-box-content tab-box-content--active bg-blue border-img-top border-img-top--blue border-img-bottom border-img-bottom--blue js-tabContent"
              data-content="tab-2"
            >
              <div
                class="container-extra-large bg-backpack-right bg-backpack-right--sm-none bg-backpack-right--to-rt swiper swiper--trip js-trip-slider"
              >
                <div
                  class="js-trip-slider-pagination swiper-pagination swiper-pagination--top"
                ></div>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="flex-box align-items-center">
                      <div
                        class="flex-box__col flex-box__col-30 pr-10em text-center"
                      >
                        <a
                          href="https://www.youtube.com/watch?v=RQzTzJPanrs"
                          class="play-video play-video--bordered play-video--no-cover rotate-left js-video animation-rollInLeft"
                          title="Watch video"
                          aria-label="Watch video"
                        >
                          <picture>
                            <img
                              src="{{asset ('assets/front/images/Aishwarya-Pissay-in-action-in-her-Yamaha-450F-1024x683.jpg')}}"
                              media="(max-width: 420px)"
                            />
                            <img
                              class="lazy"
                              data-src="{{asset ('assets/front/images/Aishwarya-Pissay-in-action-in-her-Yamaha-450F-1024x683.jpg')}}"
                              width="2500"
                              height="1667"
                              alt="Backpacking Vietnam"
                            />
                          </picture>
                          <img
                            class="play-video__icon play-video__icon--width lazy"
                            data-src="{{asset ('assets/front/images/icons/play-button.svg')}}"
                            alt="Play Video"
                          />
                        </a>
                        <svg width="200">
                          <use
                            xlink:href="images/icons.svg#icon-watch-the-video"
                          />
                        </svg>
                      </div>
                      <div
                        class="flex-box__col flex-box__col-40 animation-fadeInUp"
                      >
                        <div
                          class="card card--no-border card--shadow-blue bg-white"
                        >
                          <div
                            class="card__content card__content--padding-xl"
                          >
                            <div
                              class="card__headline card__headline--with-chip-mob card__headline--price-top-mob card__headline--with-price"
                            >
                              <div class="headline-wave">
                                <h3 class="headline-3">Moter Biking Tour</h3>
                                <svg
                                  width="100px"
                                  height="16px"
                                  class="stroke-blue"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xlink:href="images/icons.svg#icon-wave-squiggle"
                                  />
                                </svg>
                              </div>
                              <div
                                class="card__headline-price-wrapper card__headline-price-wrapper--flex-col mt-5em"
                              >
                                <div class="card__headline-price-values">
                                  <div
                                    class="card__headline-price-main bg-blue"
                                  >
                                    $2205
                                    <span
                                      class="card__headline-price-was text-upper bg-blueDark"
                                    >
                                      From
                                    </span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <p>Ultimate adventure!</p>
                            <ul
                              class="list-tour-info list-tour-info--two-cols"
                            >
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-blue"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-calendar-range"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Length</b> <span>23 Days</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-blue"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-baby-face-outline"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Avg. Age</b> <span>18-39</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-blue"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-rowing"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>No. Of Activities</b> <span>30+</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-blue"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-silverware-fork-knife"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>No. Of Meals</b> <span>28</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-blue"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-account-multiple"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Avg. Group Size</b> <span>14 - 20</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-blue"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-star"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Operator</b>
                                  <span>Quads Dubai</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-blue"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-map"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Starting Point</b> <span>Hanoi</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-blue"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-map"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Ending Point</b> <span>Ho Chi Minh</span>
                                </div>
                              </li>
                            </ul>
                            <div
                              class="card__footer card__footer--with-chip pt-20em"
                            >
                              <div>
                                <span class="chip chip--blue">
                                  Group Tour
                                </span>
                              </div>
                              <a
                                class="btn btn--purple"
                                href="vietnam-backpacking-tour.html"
                                title="View now"
                              >
                                View Tour
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="flex-box__col flex-box__col-30 pl-10em">
                        <div class="fb-review text-center">
                          <picture>
                            <img
                              class="fb-review__img rotate-right lazy animated rollInRight active loaded"
                              src="{{asset ('assets/front/images/sand-skiing.jpg')}}"
                              media="(max-width: 420px)"
                            />
                            <img
                              class="lazy"
                              data-src="{{asset ('assets/front/images/sand-skiing.jpg')}}"
                              width="2500"
                              height="1667"
                              alt="Backpacking Vietnam"
                            />
                          </picture>
                          <div class="fb-review__comment">
                            <p>
                              This was such an amazing experience! Still can't
                              believe how much we did in 23 days, 'thank you'
                              do not express how grateful I am, these are
                              memories that will last me a lifetime. If you
                              are considering BTV, go for it!
                            </p>
                            <p class="headline-8">
                              Mike,<br />
                              Facebook, 29 Oct 2021
                            </p>
                          </div>
                          {{-- <script type="application/ld+json">
                            {
                              "@context": "https://schema.org/",
                              "@type": "Product",
                              "name": "Quads Dubai",
                              "description": "Travel the best of Vietnam and meet new friends with all accommodation, activities, in-country transport, and 30 meals included! Check out all trips and everything included in the 23-day tour package.",
                              "image": [
                                "https://www.backpackingtours.com/storage/uploads/images/seo1200x1200/BT-SEO_ngwll.jpg"
                              ],
                              "brand": {
                                "@type": "Thing",
                                "name": "Quads Dubai"
                              },
                              "aggregateRating": {
                                "@type": "AggregateRating",
                                "ratingValue": "5",
                                "reviewCount": "538"
                              }
                            }
                          </script> --}}
                          <p
                            class="headline-5 mt-10em flex flex--middle flex--center"
                          >
                            <svg
                              width="22px"
                              height="22px"
                              class="fill-white"
                              aria-hidden="true"
                              aria-focusable="false"
                            >
                              <use
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                xlink:href="images/icons.svg#icon-star"
                              ></use>
                            </svg>
                            <svg
                              width="22px"
                              height="22px"
                              class="fill-white"
                              aria-hidden="true"
                              aria-focusable="false"
                            >
                              <use
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                xlink:href="images/icons.svg#icon-star"
                              ></use>
                            </svg>
                            <svg
                              width="22px"
                              height="22px"
                              class="fill-white"
                              aria-hidden="true"
                              aria-focusable="false"
                            >
                              <use
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                xlink:href="images/icons.svg#icon-star"
                              ></use>
                            </svg>
                            <svg
                              width="22px"
                              height="22px"
                              class="fill-white"
                              aria-hidden="true"
                              aria-focusable="false"
                            >
                              <use
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                xlink:href="images/icons.svg#icon-star"
                              ></use>
                            </svg>
                            <svg
                              width="22px"
                              height="22px"
                              class="fill-white"
                              aria-hidden="true"
                              aria-focusable="false"
                            >
                              <use
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                xlink:href="images/icons.svg#icon-star"
                              ></use>
                            </svg>
                          </p>
                          <span class="headline-9 underline">
                            Rated <span>5</span>/5 by
                            <a
                              class="color-white"
                              target="_blank"
                              href="https://www.facebook.com/backpackingtours/"
                              rel="noopener nofollow"
                            >
                              <span>1000</span> Travellers on Facebook
                            </a>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="flex-box align-items-center">
                      <div
                        class="flex-box__col flex-box__col-25 flex-box__col--right tab-box-content__left-col"
                      >
                        <picture>
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/whats-included/vietnam/day3-4/vietnam-backpackingtours-activities-day3-4-3_yaubp.jpg?w=390&h=270&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 420px)"
                          />
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/whats-included/vietnam/day3-4/vietnam-backpackingtours-activities-day3-4-3_yaubp.jpg?w=710&h=490&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 768px)"
                          />
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/whats-included/vietnam/day3-4/vietnam-backpackingtours-activities-day3-4-3_yaubp.jpg?w=400&h=300&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 1440px)"
                          />
                          <img
                            class="tab-box-content__left-img tab-box-content__left-img--first lazy lazy--no-fade-in animated animation-rollInLeftTop lazy"
                            data-src="https://backpacking-tours.imgix.net/storage/uploads/whats-included/vietnam/day3-4/vietnam-backpackingtours-activities-day3-4-3_yaubp.jpg?w=540&h=390&crop=faces&q=75&auto=format&fm=png"
                            width="2500"
                            height="1875"
                            alt=""
                          />
                        </picture>
                        <picture>
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/images/video-bg/vietnam-groupshot_ddpag.jpg?w=390&h=270&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 420px)"
                          />
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/images/video-bg/vietnam-groupshot_ddpag.jpg?w=710&h=490&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 768px)"
                          />
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/images/video-bg/vietnam-groupshot_ddpag.jpg?w=400&h=300&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 1440px)"
                          />
                          <img
                            class="tab-box-content__left-img tab-box-content__left-img--second lazy lazy--no-fade-in animated animation-rollInLeftTop lazy"
                            data-src="https://backpacking-tours.imgix.net/storage/uploads/images/video-bg/vietnam-groupshot_ddpag.jpg?w=540&h=390&crop=faces&q=75&auto=format&fm=png"
                            width="2500"
                            height="1667"
                            alt=""
                          />
                        </picture>
                      </div>
                      <div
                        class="flex-box__col flex-box__col-40 animation-fadeInUp"
                      >
                        <div
                          class="card card--no-border card--shadow-blue bg-white"
                        >
                          <div
                            class="card__content card__content--padding-xl"
                          >
                            <div
                              class="card__headline card__headline--with-chip-mob card__headline--price-top-mob card__headline--with-price"
                            >
                              <div class="headline-wave">
                                <h3 class="headline-3">
                                  Moter Bike desert Advanture
                                </h3>
                                <svg
                                  width="100px"
                                  height="16px"
                                  class="stroke-blue"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xlink:href="images/icons.svg#icon-wave-squiggle"
                                  />
                                </svg>
                              </div>
                              <div
                                class="card__headline-price-wrapper card__headline-price-wrapper--flex-col mt-5em"
                              >
                                <div class="card__headline-price-values">
                                  <div
                                    class="card__headline-price-main bg-blue"
                                  >
                                    $1200
                                    <span
                                      class="card__headline-price-was text-upper bg-blueDark"
                                    >
                                      From
                                    </span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <ul
                              class="list-tour-info list-tour-info--two-cols"
                            >
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-blue"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-calendar-range"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Length</b> <span>12 Days</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-blue"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-baby-face-outline"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Avg. Age</b> <span>18-39</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-blue"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-rowing"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>No. Of Activities</b> <span>27</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-blue"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-silverware-fork-knife"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>No. Of Meals</b> <span>16</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-blue"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-account-multiple"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Avg. Group Size</b> <span>14 - 20</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-blue"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-star"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Operator</b>
                                  <span>Quads Dubai</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-blue"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-map"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Starting Point</b> <span>Hanoi</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-blue"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-map"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Ending Point</b> <span>Hoi An</span>
                                </div>
                              </li>
                            </ul>
                            <div
                              class="card__footer card__footer--with-chip pt-20em"
                            >
                              <div>
                                <span class="chip chip--blue">
                                  Group Tour
                                </span>
                              </div>
                              <a
                                class="btn btn--purple"
                                href="book-a-backpacking-tour/backpacking-vietnam-north.html"
                                title="View now"
                              >
                                View Tour
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div
                        class="flex-box__col flex-box__col-25 flex-box__col--right tab-box-content__right-col"
                      >
                        <picture>
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/whats-included/vietnam/day6/vietnam-backpackingtours-activities-day6-5_lldpf.jpg?w=390&h=270&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 420px)"
                          />
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/whats-included/vietnam/day6/vietnam-backpackingtours-activities-day6-5_lldpf.jpg?w=710&h=490&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 768px)"
                          />
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/whats-included/vietnam/day6/vietnam-backpackingtours-activities-day6-5_lldpf.jpg?w=400&h=300&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 1440px)"
                          />
                          <img
                            class="tab-box-content__right-img tab-box-content__right-img--first lazy lazy--no-fade-in animated animation-rollInRightTop lazy"
                            data-src="https://backpacking-tours.imgix.net/storage/uploads/whats-included/vietnam/day6/vietnam-backpackingtours-activities-day6-5_lldpf.jpg?w=540&h=390&crop=faces&q=75&auto=format&fm=png"
                            width="2500"
                            height="1875"
                            alt=""
                          />
                        </picture>
                        <picture>
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/whats-included/vietnam/day7/left-pn_afqfh.jpg?w=390&h=270&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 420px)"
                          />
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/whats-included/vietnam/day7/left-pn_afqfh.jpg?w=710&h=490&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 768px)"
                          />
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/whats-included/vietnam/day7/left-pn_afqfh.jpg?w=400&h=300&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 1440px)"
                          />
                          <img
                            class="tab-box-content__right-img tab-box-content__right-img--second lazy lazy--no-fade-in animated animation-rollInRightTop lazy"
                            data-src="https://backpacking-tours.imgix.net/storage/uploads/whats-included/vietnam/day7/left-pn_afqfh.jpg?w=540&h=390&crop=faces&q=75&auto=format&fm=png"
                            width="2500"
                            height="1875"
                            alt=""
                          />
                        </picture>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="flex-box align-items-center">
                      <div
                        class="flex-box__col flex-box__col-25 flex-box__col--right tab-box-content__left-col"
                      >
                        <picture>
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/whats-included/vietnam/day12/BTV24Jul2018%5BEOT%5D115-2_vuweb.jpg?w=390&h=270&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 420px)"
                          />
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/whats-included/vietnam/day12/BTV24Jul2018%5BEOT%5D115-2_vuweb.jpg?w=710&h=490&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 768px)"
                          />
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/whats-included/vietnam/day12/BTV24Jul2018%5BEOT%5D115-2_vuweb.jpg?w=400&h=300&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 1440px)"
                          />
                          <img
                            class="tab-box-content__left-img tab-box-content__left-img--first lazy lazy--no-fade-in animated animation-rollInLeftTop lazy"
                            data-src="https://backpacking-tours.imgix.net/storage/uploads/whats-included/vietnam/day12/BTV24Jul2018%5BEOT%5D115-2_vuweb.jpg?w=540&h=390&crop=faces&q=75&auto=format&fm=png"
                            width="2500"
                            height="1875"
                            alt=""
                          />
                        </picture>
                        <picture>
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/whats-included/vietnam/day14/vietnam-backpackingtours-activities-day14-15_nmnhf.jpg?w=390&h=270&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 420px)"
                          />
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/whats-included/vietnam/day14/vietnam-backpackingtours-activities-day14-15_nmnhf.jpg?w=710&h=490&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 768px)"
                          />
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/whats-included/vietnam/day14/vietnam-backpackingtours-activities-day14-15_nmnhf.jpg?w=400&h=300&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 1440px)"
                          />
                          <img
                            class="tab-box-content__left-img tab-box-content__left-img--second lazy lazy--no-fade-in animated animation-rollInLeftTop lazy"
                            data-src="https://backpacking-tours.imgix.net/storage/uploads/whats-included/vietnam/day14/vietnam-backpackingtours-activities-day14-15_nmnhf.jpg?w=540&h=390&crop=faces&q=75&auto=format&fm=png"
                            width="2500"
                            height="1875"
                            alt=""
                          />
                        </picture>
                      </div>
                      <div
                        class="flex-box__col flex-box__col-40 animation-fadeInUp"
                      >
                        <div
                          class="card card--no-border card--shadow-blue bg-white"
                        >
                          <div
                            class="card__content card__content--padding-xl"
                          >
                            <div
                              class="card__headline card__headline--with-chip-mob card__headline--price-top-mob card__headline--with-price"
                            >
                              <div class="headline-wave">
                                <h3 class="headline-3">
                                  Moter Bike Forest Advanture
                                </h3>
                                <svg
                                  width="100px"
                                  height="16px"
                                  class="stroke-blue"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xlink:href="images/icons.svg#icon-wave-squiggle"
                                  />
                                </svg>
                              </div>
                              <div
                                class="card__headline-price-wrapper card__headline-price-wrapper--flex-col mt-5em"
                              >
                                <div class="card__headline-price-values">
                                  <div
                                    class="card__headline-price-main bg-blue"
                                  >
                                    $1145
                                    <span
                                      class="card__headline-price-was text-upper bg-blueDark"
                                    >
                                      From
                                    </span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <ul
                              class="list-tour-info list-tour-info--two-cols"
                            >
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-blue"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-calendar-range"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Length</b> <span>12 Days</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-blue"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-baby-face-outline"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Avg. Age</b> <span>18-39</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-blue"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-rowing"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>No. Of Activities</b> <span>18</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-blue"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-silverware-fork-knife"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>No. Of Meals</b> <span>13</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-blue"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-account-multiple"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Avg. Group Size</b> <span>14 - 20</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-blue"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-star"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Operator</b>
                                  <span>Quads Dubai</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-blue"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-map"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Starting Point</b> <span>Hoi An</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-blue"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-map"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Ending Point</b> <span>Ho Chi Minh</span>
                                </div>
                              </li>
                            </ul>
                            <div
                              class="card__footer card__footer--with-chip pt-20em"
                            >
                              <div>
                                <span class="chip chip--blue">
                                  Group Tour
                                </span>
                              </div>
                              <a
                                class="btn btn--purple"
                                href="book-a-backpacking-tour/backpacking-vietnam-south.html"
                                title="View now"
                              >
                                View Tour
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div
                        class="flex-box__col flex-box__col-25 flex-box__col--right tab-box-content__right-col"
                      >
                        <picture>
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/whats-included/vietnam/day16/IMG_7342_vvqxr.jpg?w=390&h=270&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 420px)"
                          />
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/whats-included/vietnam/day16/IMG_7342_vvqxr.jpg?w=710&h=490&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 768px)"
                          />
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/whats-included/vietnam/day16/IMG_7342_vvqxr.jpg?w=400&h=300&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 1440px)"
                          />
                          <img
                            class="tab-box-content__right-img tab-box-content__right-img--first lazy lazy--no-fade-in animated animation-rollInRightTop lazy"
                            data-src="https://backpacking-tours.imgix.net/storage/uploads/whats-included/vietnam/day16/IMG_7342_vvqxr.jpg?w=540&h=390&crop=faces&q=75&auto=format&fm=png"
                            width="2000"
                            height="1500"
                            alt=""
                          />
                        </picture>
                        <picture>
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/whats-included/vietnam/day17/vietnam-backpackingtours-activities-day17-4_tczqd.jpg?w=390&h=270&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 420px)"
                          />
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/whats-included/vietnam/day17/vietnam-backpackingtours-activities-day17-4_tczqd.jpg?w=710&h=490&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 768px)"
                          />
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/whats-included/vietnam/day17/vietnam-backpackingtours-activities-day17-4_tczqd.jpg?w=400&h=300&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 1440px)"
                          />
                          <img
                            class="tab-box-content__right-img tab-box-content__right-img--second lazy lazy--no-fade-in animated animation-rollInRightTop lazy"
                            data-src="https://backpacking-tours.imgix.net/storage/uploads/whats-included/vietnam/day17/vietnam-backpackingtours-activities-day17-4_tczqd.jpg?w=540&h=390&crop=faces&q=75&auto=format&fm=png"
                            width="2500"
                            height="1875"
                            alt=""
                          />
                        </picture>
                      </div>
                    </div>
                  </div>
                </div>
                <button
                  class="js-trip-slider-prev swiper-button swiper-button--prev"
                  aria-label="Previous tour"
                  type="button"
                >
                  <svg width="24" height="24">
                    <use xlink:href="images/icons.svg#icon-play-button"></use>
                  </svg>
                </button>
                <button
                  class="js-trip-slider-next swiper-button"
                  aria-label="Next tour"
                  type="button"
                >
                  <svg width="24" height="24">
                    <use xlink:href="images/icons.svg#icon-play-button"></use>
                  </svg>
                </button>
                <div
                  class="js-trip-slider-pagination swiper-pagination"
                ></div>
              </div>
              <p class="text-center">
                <a
                  class="btn btn--black"
                  href="book-a-backpacking-tour8130.html?country=Vietnam"
                >
                  View All Moter Biking Tours
                </a>
              </p>
            </div>
            <div
              class="tab-box-content bg-green border-img-top border-img-top--green border-img-bottom border-img-bottom--green js-tabContent"
              data-content="tab-7"
            >
              <div
                class="container-extra-large bg-backpack-right bg-backpack-right--sm-none bg-backpack-right--to-rt swiper swiper--trip js-trip-slider"
              >
                <div
                  class="js-trip-slider-pagination swiper-pagination swiper-pagination--top"
                ></div>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="flex-box align-items-center">
                      <div
                        class="flex-box__col flex-box__col-25 flex-box__col--right tab-box-content__left-col"
                      >
                        <picture>
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/whats-included/srilanka/day2/srilanka-nologo-14_lumwj.jpg?w=390&h=270&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 420px)"
                          />
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/whats-included/srilanka/day2/srilanka-nologo-14_lumwj.jpg?w=710&h=490&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 768px)"
                          />
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/whats-included/srilanka/day2/srilanka-nologo-14_lumwj.jpg?w=400&h=300&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 1440px)"
                          />
                          <img
                            class="tab-box-content__left-img tab-box-content__left-img--first lazy lazy--no-fade-in animated animation-rollInLeftTop lazy"
                            data-src="https://backpacking-tours.imgix.net/storage/uploads/whats-included/srilanka/day2/srilanka-nologo-14_lumwj.jpg?w=540&h=390&crop=faces&q=75&auto=format&fm=png"
                            width="3000"
                            height="2000"
                            alt=""
                          />
                        </picture>
                        <picture>
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/gallery/sri-lanka/activities/day-9/elephantssrilanka_yxejq.jpeg?w=390&h=270&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 420px)"
                          />
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/gallery/sri-lanka/activities/day-9/elephantssrilanka_yxejq.jpeg?w=710&h=490&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 768px)"
                          />
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/gallery/sri-lanka/activities/day-9/elephantssrilanka_yxejq.jpeg?w=400&h=300&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 1440px)"
                          />
                          <img
                            class="tab-box-content__left-img tab-box-content__left-img--second lazy lazy--no-fade-in animated animation-rollInLeftTop lazy"
                            data-src="https://backpacking-tours.imgix.net/storage/uploads/gallery/sri-lanka/activities/day-9/elephantssrilanka_yxejq.jpeg?w=540&h=390&crop=faces&q=75&auto=format&fm=png"
                            width="4387"
                            height="3045"
                            alt=""
                          />
                        </picture>
                      </div>
                      <div
                        class="flex-box__col flex-box__col-40 animation-fadeInUp"
                      >
                        <div
                          class="card card--no-border card--shadow-green bg-white"
                        >
                          <div
                            class="card__content card__content--padding-xl"
                          >
                            <div
                              class="card__headline card__headline--with-chip-mob card__headline--price-top-mob card__headline--with-price"
                            >
                              <div class="headline-wave">
                                <h3 class="headline-3">Quad Biking Tours</h3>
                                <svg
                                  width="100px"
                                  height="16px"
                                  class="stroke-green"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xlink:href="images/icons.svg#icon-wave-squiggle"
                                  />
                                </svg>
                              </div>
                              <div
                                class="card__headline-price-wrapper card__headline-price-wrapper--flex-col mt-5em"
                              >
                                <div class="card__headline-price-values">
                                  <div
                                    class="card__headline-price-main bg-green"
                                  >
                                    $1565
                                    <span
                                      class="card__headline-price-was text-upper bg-greenDark"
                                    >
                                      From
                                    </span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <p>
                              Experience the best stunning Quad Bike Ride.
                            </p>
                            <ul
                              class="list-tour-info list-tour-info--two-cols"
                            >
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-green"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-calendar-range"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Length</b> <span>15 Days</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-green"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-baby-face-outline"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Avg. Age</b> <span>18-39</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-green"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-rowing"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>No. Of Activities</b> <span>28</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-green"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-silverware-fork-knife"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>No. Of Meals</b> <span>18</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-green"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-account-multiple"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Avg. Group Size</b> <span>12 - 18</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-green"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-star"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Operator</b>
                                  <span>Quad Dubai</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-green"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-map"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Starting Point</b> <span>Colombo</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-green"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-map"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Ending Point</b> <span>Colombo</span>
                                </div>
                              </li>
                            </ul>
                            <div
                              class="card__footer card__footer--with-chip pt-20em"
                            >
                              <div>
                                <span class="chip chip--green">
                                  Group Tour
                                </span>
                              </div>
                              <a
                                class="btn btn--purple"
                                href="sri-lanka-backpacking-tour.html"
                                title="View now"
                              >
                                View Tour
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div
                        class="flex-box__col flex-box__col-25 flex-box__col--right tab-box-content__right-col"
                      >
                        <picture>
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/whats-included/srilanka/day3/srilanka-nologo-noresize-143_zzita.jpg?w=390&h=270&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 420px)"
                          />
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/whats-included/srilanka/day3/srilanka-nologo-noresize-143_zzita.jpg?w=710&h=490&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 768px)"
                          />
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/whats-included/srilanka/day3/srilanka-nologo-noresize-143_zzita.jpg?w=400&h=300&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 1440px)"
                          />
                          <img
                            class="tab-box-content__right-img tab-box-content__right-img--first lazy lazy--no-fade-in animated animation-rollInRightTop lazy"
                            data-src="https://backpacking-tours.imgix.net/storage/uploads/whats-included/srilanka/day3/srilanka-nologo-noresize-143_zzita.jpg?w=540&h=390&crop=faces&q=75&auto=format&fm=png"
                            width="1000"
                            height="662"
                            alt=""
                          />
                        </picture>
                        <picture>
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/whats-included/srilanka/day14/srilanka-nologo_usvol.jpg?w=390&h=270&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 420px)"
                          />
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/whats-included/srilanka/day14/srilanka-nologo_usvol.jpg?w=710&h=490&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 768px)"
                          />
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/whats-included/srilanka/day14/srilanka-nologo_usvol.jpg?w=400&h=300&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 1440px)"
                          />
                          <img
                            class="tab-box-content__right-img tab-box-content__right-img--second lazy lazy--no-fade-in animated animation-rollInRightTop lazy"
                            data-src="https://backpacking-tours.imgix.net/storage/uploads/whats-included/srilanka/day14/srilanka-nologo_usvol.jpg?w=540&h=390&crop=faces&q=75&auto=format&fm=png"
                            width="3000"
                            height="2000"
                            alt=""
                          />
                        </picture>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="js-trip-slider-pagination swiper-pagination"
                ></div>
              </div>
              <p class="text-center">
                <a
                  class="btn btn--black"
                  href="book-a-backpacking-tour58a8.html?country=Sri%20Lanka"
                >
                  View All Quad Biking Tours
                </a>
              </p>
            </div>
            <div
              class="tab-box-content bg-orange border-img-top border-img-top--orange border-img-bottom border-img-bottom--orange js-tabContent"
              data-content="tab-1"
            >
              <div
                class="container-extra-large bg-backpack-right bg-backpack-right--sm-none bg-backpack-right--to-rt swiper swiper--trip js-trip-slider"
              >
                <div
                  class="js-trip-slider-pagination swiper-pagination swiper-pagination--top"
                ></div>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="flex-box align-items-center">
                      <div
                        class="flex-box__col flex-box__col-30 pr-10em text-center"
                      >
                        <a
                          href="https://www.youtube.com/watch?v=koyAuUHFa_g"
                          class="play-video play-video--bordered play-video--no-cover rotate-left js-video animation-rollInLeft"
                          title="Watch video"
                          aria-label="Watch video"
                        >
                          <!--<picture>
                            <source
                              data-srcset="https://backpacking-tours.imgix.net/storage/uploads/images/video-bg/thailand-groupshot_iiaxo.jpg?w=380&h=250&crop=faces&q=75&auto=format&fm=png"
                              media="(max-width: 420px)"
                            />
                            <source
                              data-srcset="https://backpacking-tours.imgix.net/storage/uploads/images/video-bg/thailand-groupshot_iiaxo.jpg?w=690&h=460&crop=faces&q=75&auto=format&fm=png"
                              media="(max-width: 768px)"
                            />
                            <source
                              data-srcset="https://backpacking-tours.imgix.net/storage/uploads/images/video-bg/thailand-groupshot_iiaxo.jpg?w=330&h=220&crop=faces&q=75&auto=format&fm=png"
                              media="(max-width: 1440px)"
                            />
                            <img
                              class="lazy"
                              data-src="https://backpacking-tours.imgix.net/storage/uploads/images/video-bg/thailand-groupshot_iiaxo.jpg?w=430&h=290&crop=faces&q=75&auto=format&fm=png"
                              width="2500"
                              height="1667"
                              alt="Backpacking Thailand"
                            />
                          </picture>-->
                          <picture>
                            <img
                              src="{{asset ('assets/front/images/20180607_Worimi_Sand-Dune-Adventures_DestinationNSW_JM_5D4_3735-1000px-667px.jpg')}}"
                              media="(max-width: 420px)"
                            />
                            <img
                              class="lazy"
                              data-src="{{asset ('assets/front/images/20180607_Worimi_Sand-Dune-Adventures_DestinationNSW_JM_5D4_3735-1000px-667px.jpg')}}"
                              width="2500"
                              height="1667"
                              alt="Backpacking Vietnam"
                            />
                          </picture>
                          <img
                            class="play-video__icon play-video__icon--width lazy"
                            data-src="{{asset ('assets/front/images/icons/play-button.svg')}}"
                            alt="Play Video"
                          />
                        </a>
                        <svg width="200">
                          <use
                            xlink:href="{{asset ('assets/front/images/icons.svg#icon-watch-the-video')}}"
                          />
                        </svg>
                      </div>
                      <div
                        class="flex-box__col flex-box__col-40 animation-fadeInUp"
                      >
                        <div
                          class="card card--no-border card--shadow-orange bg-white"
                        >
                          <div
                            class="card__content card__content--padding-xl"
                          >
                            <div
                              class="card__headline card__headline--with-chip-mob card__headline--price-top-mob card__headline--with-price"
                            >
                              <div class="headline-wave">
                                <h3 class="headline-3">Dune Buggy Tour</h3>
                                <svg
                                  width="100px"
                                  height="16px"
                                  class="stroke-orange"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xlink:href="{{asset ('assets/front/images/icons.svg#icon-wave-squiggle')}}"
                                  />
                                </svg>
                              </div>
                              <div
                                class="card__headline-price-wrapper card__headline-price-wrapper--flex-col mt-5em"
                              >
                                <div class="card__headline-price-values">
                                  <div
                                    class="card__headline-price-main bg-orange"
                                  >
                                    $2019
                                    <span
                                      class="card__headline-price-was text-upper bg-orangeDark"
                                    >
                                      From
                                    </span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <p>
                              White-sand beaches, jungle, waterfalls, culture,
                              nightlife, rescued elephants, floating
                              bungalows, and so much more!
                            </p>
                            <ul
                              class="list-tour-info list-tour-info--two-cols"
                            >
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-orange"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-calendar-range"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Length</b> <span>21 Days</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-orange"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-baby-face-outline"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Avg. Age</b> <span>18-39</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-orange"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-rowing"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>No. Of Activities</b> <span>30+</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-orange"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-silverware-fork-knife"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>No. Of Meals</b> <span>24</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-orange"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-account-multiple"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Avg. Group Size</b> <span>15 - 30</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-orange"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-star"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Operator</b>
                                  <span>Quad Dubai</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-orange"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-map"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Starting Point</b> <span>Bangkok</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-orange"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-map"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Ending Point</b> <span>Bangkok</span>
                                </div>
                              </li>
                            </ul>
                            <div
                              class="card__footer card__footer--with-chip pt-20em"
                            >
                              <div>
                                <span class="chip chip--orange">
                                  Group Tour
                                </span>
                              </div>
                              <a
                                class="btn btn--purple"
                                href="thailand-backpacking-tour.html"
                                title="View now"
                              >
                                View Tour
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="flex-box__col flex-box__col-30 pl-10em">
                        <div class="fb-review text-center">
                          <picture>
                            <img
                              class="fb-review__img rotate-right lazy animated rollInRight active loaded"
                              src="{{asset ('assets/front/images/iyylp09p2xc17zpk8uzz.webp')}}"
                              media="(max-width: 420px)"
                            />
                            <img
                              class="lazy"
                              data-src="{{asset ('assets/front/images/iyylp09p2xc17zpk8uzz.webp')}}"
                              width="2500"
                              height="1667"
                              alt="Backpacking Vietnam"
                            />
                          </picture>
                          <div class="fb-review__comment">
                            <p>
                              5 STARS ALL THE WAY! I absolutely loved my time
                              on this tour. It was my first time traveling
                              alone and I can say I've met some life long
                              friends from all over the world.
                            </p>
                            <p class="headline-8">
                              Ajilia,<br />
                              Facebook, 25 May 2021
                            </p>
                          </div>
                          <script type="application/ld+json">
                            {
                              "@context": "https://schema.org/",
                              "@type": "Product",
                              "name": "Backpacking Thailand",
                              "description": "Travel the best of Thailand in our 21-day Backpacking Tour. Meet new friends with all accommodation, activities, in-country transport, and 24 meals included! Discover our Thailand Backpacking Tour today.",
                              "image": [
                                "https://www.backpackingtours.com/storage/uploads/images/seo1200x1200/BT-SEO_ngwll.jpg"
                              ],
                              "brand": {
                                "@type": "Thing",
                                "name": "Quads Dubai"
                              },
                              "aggregateRating": {
                                "@type": "AggregateRating",
                                "ratingValue": "5",
                                "reviewCount": "538"
                              }
                            }
                          </script>
                          <p
                            class="headline-5 mt-10em flex flex--middle flex--center"
                          >
                            <svg
                              width="22px"
                              height="22px"
                              class="fill-white"
                              aria-hidden="true"
                              aria-focusable="false"
                            >
                              <use
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                xlink:href="images/icons.svg#icon-star"
                              ></use>
                            </svg>
                            <svg
                              width="22px"
                              height="22px"
                              class="fill-white"
                              aria-hidden="true"
                              aria-focusable="false"
                            >
                              <use
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                xlink:href="images/icons.svg#icon-star"
                              ></use>
                            </svg>
                            <svg
                              width="22px"
                              height="22px"
                              class="fill-white"
                              aria-hidden="true"
                              aria-focusable="false"
                            >
                              <use
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                xlink:href="images/icons.svg#icon-star"
                              ></use>
                            </svg>
                            <svg
                              width="22px"
                              height="22px"
                              class="fill-white"
                              aria-hidden="true"
                              aria-focusable="false"
                            >
                              <use
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                xlink:href="images/icons.svg#icon-star"
                              ></use>
                            </svg>
                            <svg
                              width="22px"
                              height="22px"
                              class="fill-white"
                              aria-hidden="true"
                              aria-focusable="false"
                            >
                              <use
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                xlink:href="images/icons.svg#icon-star"
                              ></use>
                            </svg>
                          </p>
                          <span class="headline-9 underline">
                            Rated <span>5</span>/5 by
                            <a
                              class="color-white"
                              target="_blank"
                              href="https://www.facebook.com/backpackingtours/"
                              rel="noopener nofollow"
                            >
                              <span>1000</span> Travellers on Facebook
                            </a>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="flex-box align-items-center">
                      <div
                        class="flex-box__col flex-box__col-25 flex-box__col--right tab-box-content__left-col"
                      >
                        <picture>
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/tours/thailand/elephant-camp/IMG_0385-02_esmcc.jpeg?w=390&h=270&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 420px)"
                          />
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/tours/thailand/elephant-camp/IMG_0385-02_esmcc.jpeg?w=710&h=490&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 768px)"
                          />
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/tours/thailand/elephant-camp/IMG_0385-02_esmcc.jpeg?w=400&h=300&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 1440px)"
                          />
                          <img
                            class="tab-box-content__left-img tab-box-content__left-img--first lazy lazy--no-fade-in animated animation-rollInLeftTop lazy"
                            data-src="https://backpacking-tours.imgix.net/storage/uploads/tours/thailand/elephant-camp/IMG_0385-02_esmcc.jpeg?w=540&h=390&crop=faces&q=75&auto=format&fm=png"
                            width="1500"
                            height="1000"
                            alt=""
                          />
                        </picture>
                        <picture>
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/tours/thailand/elephant-camp/9nov2019btt-102_ramjb.jpg?w=390&h=270&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 420px)"
                          />
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/tours/thailand/elephant-camp/9nov2019btt-102_ramjb.jpg?w=710&h=490&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 768px)"
                          />
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/tours/thailand/elephant-camp/9nov2019btt-102_ramjb.jpg?w=400&h=300&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 1440px)"
                          />
                          <img
                            class="tab-box-content__left-img tab-box-content__left-img--second lazy lazy--no-fade-in animated animation-rollInLeftTop lazy"
                            data-src="https://backpacking-tours.imgix.net/storage/uploads/tours/thailand/elephant-camp/9nov2019btt-102_ramjb.jpg?w=540&h=390&crop=faces&q=75&auto=format&fm=png"
                            width="2500"
                            height="1875"
                            alt=""
                          />
                        </picture>
                      </div>
                      <div
                        class="flex-box__col flex-box__col-40 animation-fadeInUp"
                      >
                        <div
                          class="card card--no-border card--shadow-orange bg-white"
                        >
                          <div
                            class="card__content card__content--padding-xl"
                          >
                            <div
                              class="card__headline card__headline--with-chip-mob card__headline--price-top-mob card__headline--with-price"
                            >
                              <div class="headline-wave">
                                <h3 class="headline-3">Dune Buggy Tour</h3>
                                <svg
                                  width="100px"
                                  height="16px"
                                  class="stroke-orange"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xlink:href="images/icons.svg#icon-wave-squiggle"
                                  />
                                </svg>
                              </div>
                              <div
                                class="card__headline-price-wrapper card__headline-price-wrapper--flex-col mt-5em"
                              >
                                <div class="card__headline-price-values">
                                  <div
                                    class="card__headline-price-main bg-orange"
                                  >
                                    $645
                                    <span
                                      class="card__headline-price-was text-upper bg-orangeDark"
                                    >
                                      From
                                    </span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <p>
                              Get to first-name basis with rescued elephants
                              in Kanchanaburi.
                            </p>
                            <ul
                              class="list-tour-info list-tour-info--two-cols"
                            >
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-orange"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-calendar-range"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Length</b> <span>Min 7 Days</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-orange"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-baby-face-outline"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Avg. Age</b> <span>All Ages</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-orange"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-silverware-fork-knife"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>No. Of Meals</b> <span>15 Meals</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-orange"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-account-multiple"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Avg. Group Size</b> <span>4-10</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-orange"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-star"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Operator</b>
                                  <span>Quad Dubai</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-orange"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-map"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Starting Point</b> <span>Bangkok</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-orange"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-map"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Ending Point</b> <span>Kanchaburi</span>
                                </div>
                              </li>
                            </ul>
                            <div
                              class="card__footer card__footer--with-chip pt-20em"
                            >
                              <div>
                                <span class="chip chip--orange">
                                  Volunteering
                                </span>
                              </div>
                              <a
                                class="btn btn--purple"
                                href="book-a-backpacking-tour/elephant-volunteering-thailand.html"
                                title="View now"
                              >
                                View Tour
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div
                        class="flex-box__col flex-box__col-25 flex-box__col--right tab-box-content__right-col"
                      >
                        <picture>
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/tours/thailand/elephant-camp/thailand-eot-3aug2019-167_lvmiw.jpg?w=390&h=270&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 420px)"
                          />
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/tours/thailand/elephant-camp/thailand-eot-3aug2019-167_lvmiw.jpg?w=710&h=490&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 768px)"
                          />
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/tours/thailand/elephant-camp/thailand-eot-3aug2019-167_lvmiw.jpg?w=400&h=300&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 1440px)"
                          />
                          <img
                            class="tab-box-content__right-img tab-box-content__right-img--first lazy lazy--no-fade-in animated animation-rollInRightTop lazy"
                            data-src="https://backpacking-tours.imgix.net/storage/uploads/tours/thailand/elephant-camp/thailand-eot-3aug2019-167_lvmiw.jpg?w=540&h=390&crop=faces&q=75&auto=format&fm=png"
                            width="2500"
                            height="1975"
                            alt=""
                          />
                        </picture>
                        <picture>
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/tours/thailand/elephant-camp/16-june-btt-eot183_rkooi.jpg?w=390&h=270&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 420px)"
                          />
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/tours/thailand/elephant-camp/16-june-btt-eot183_rkooi.jpg?w=710&h=490&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 768px)"
                          />
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/tours/thailand/elephant-camp/16-june-btt-eot183_rkooi.jpg?w=400&h=300&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 1440px)"
                          />
                          <img
                            class="tab-box-content__right-img tab-box-content__right-img--second lazy lazy--no-fade-in animated animation-rollInRightTop lazy"
                            data-src="https://backpacking-tours.imgix.net/storage/uploads/tours/thailand/elephant-camp/16-june-btt-eot183_rkooi.jpg?w=540&h=390&crop=faces&q=75&auto=format&fm=png"
                            width="2000"
                            height="1500"
                            alt=""
                          />
                        </picture>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="flex-box align-items-center">
                      <div
                        class="flex-box__col flex-box__col-25 flex-box__col--right tab-box-content__left-col"
                      >
                        <picture>
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/tours/thailand/songkran/39433674_vwfpe.jpg?w=390&h=270&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 420px)"
                          />
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/tours/thailand/songkran/39433674_vwfpe.jpg?w=710&h=490&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 768px)"
                          />
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/tours/thailand/songkran/39433674_vwfpe.jpg?w=400&h=300&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 1440px)"
                          />
                          <img
                            class="tab-box-content__left-img tab-box-content__left-img--first lazy lazy--no-fade-in animated animation-rollInLeftTop lazy"
                            data-src="https://backpacking-tours.imgix.net/storage/uploads/tours/thailand/songkran/39433674_vwfpe.jpg?w=540&h=390&crop=faces&q=75&auto=format&fm=png"
                            width="1182"
                            height="887"
                            alt=""
                          />
                        </picture>
                        <picture>
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/tours/thailand/songkran/fmp1_drqyc.jpg?w=390&h=270&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 420px)"
                          />
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/tours/thailand/songkran/fmp1_drqyc.jpg?w=710&h=490&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 768px)"
                          />
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/tours/thailand/songkran/fmp1_drqyc.jpg?w=400&h=300&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 1440px)"
                          />
                          <img
                            class="tab-box-content__left-img tab-box-content__left-img--second lazy lazy--no-fade-in animated animation-rollInLeftTop lazy"
                            data-src="https://backpacking-tours.imgix.net/storage/uploads/tours/thailand/songkran/fmp1_drqyc.jpg?w=540&h=390&crop=faces&q=75&auto=format&fm=png"
                            width="1360"
                            height="899"
                            alt=""
                          />
                        </picture>
                      </div>
                      <div
                        class="flex-box__col flex-box__col-40 animation-fadeInUp"
                      >
                        <div
                          class="card card--no-border card--shadow-orange bg-white"
                        >
                          <div
                            class="card__content card__content--padding-xl"
                          >
                            <div
                              class="card__headline card__headline--with-chip-mob card__headline--price-top-mob card__headline--with-price"
                            >
                              <div class="headline-wave">
                                <h3 class="headline-3">
                                  Dune Buggy (December)
                                </h3>
                                <svg
                                  width="100px"
                                  height="16px"
                                  class="stroke-orange"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xlink:href="images/icons.svg#icon-wave-squiggle"
                                  />
                                </svg>
                              </div>
                              <div
                                class="card__headline-price-wrapper card__headline-price-wrapper--flex-col mt-5em"
                              >
                                <div class="card__headline-price-values">
                                  <div
                                    class="card__headline-price-main bg-orange"
                                  >
                                    $1320
                                    <span
                                      class="card__headline-price-was text-upper bg-orangeDark"
                                    >
                                      From
                                    </span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <p>
                              Quad Dubai Tours is proud and thrilled to
                              announce a unique 13-day Thailand tour, to
                              celebrate the Thai New Year and our own 10-year
                              anniversary! Songkran is the world's largest
                              water fight lasting 4 days!! And we thought we'd
                              extend that party vibe with a (comparatively
                              chilled) Full Moon Party. Oh, yeah, and our
                              birthday bash...
                            </p>
                            <ul
                              class="list-tour-info list-tour-info--two-cols"
                            >
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-orange"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-calendar-range"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Length</b> <span>13 Days</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-orange"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-baby-face-outline"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Avg. Age</b> <span>18-45</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-orange"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-rowing"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>No. Of Activities</b> <span>8</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-orange"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-silverware-fork-knife"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>No. Of Meals</b> <span>13</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-orange"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-account-multiple"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Avg. Group Size</b> <span>30+</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-orange"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-star"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Operator</b>
                                  <span>Quads Dubai</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-orange"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-map"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Starting Point</b> <span>Bangkok</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-orange"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-map"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Ending Point</b> <span>Chiang Mai</span>
                                </div>
                              </li>
                            </ul>
                            <div
                              class="card__footer card__footer--with-chip pt-20em"
                            >
                              <div>
                                <span class="chip chip--orange">
                                  Group Tour
                                </span>
                              </div>
                              <a
                                class="btn btn--purple"
                                href="book-a-backpacking-tour/songkran-tour-extended-april.html"
                                title="View now"
                              >
                                View Tour
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div
                        class="flex-box__col flex-box__col-25 flex-box__col--right tab-box-content__right-col"
                      >
                        <picture>
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/tours/thailand/songkran/kohphangan1_wxhce.jpg?w=390&h=270&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 420px)"
                          />
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/tours/thailand/songkran/kohphangan1_wxhce.jpg?w=710&h=490&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 768px)"
                          />
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/tours/thailand/songkran/kohphangan1_wxhce.jpg?w=400&h=300&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 1440px)"
                          />
                          <img
                            class="tab-box-content__right-img tab-box-content__right-img--first lazy lazy--no-fade-in animated animation-rollInRightTop lazy"
                            data-src="https://backpacking-tours.imgix.net/storage/uploads/tours/thailand/songkran/kohphangan1_wxhce.jpg?w=540&h=390&crop=faces&q=75&auto=format&fm=png"
                            width="1320"
                            height="750"
                            alt=""
                          />
                        </picture>
                        <picture>
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/tours/thailand/thailand-mainphoto_kalcl.jpg?w=390&h=270&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 420px)"
                          />
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/tours/thailand/thailand-mainphoto_kalcl.jpg?w=710&h=490&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 768px)"
                          />
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/tours/thailand/thailand-mainphoto_kalcl.jpg?w=400&h=300&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 1440px)"
                          />
                          <img
                            class="tab-box-content__right-img tab-box-content__right-img--second lazy lazy--no-fade-in animated animation-rollInRightTop lazy"
                            data-src="https://backpacking-tours.imgix.net/storage/uploads/tours/thailand/thailand-mainphoto_kalcl.jpg?w=540&h=390&crop=faces&q=75&auto=format&fm=png"
                            width="1077"
                            height="605"
                            alt=""
                          />
                        </picture>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="flex-box align-items-center">
                      <div
                        class="flex-box__col flex-box__col-25 flex-box__col--right tab-box-content__left-col"
                      >
                        <picture>
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/tours/thailand/songkran/36160274_kpbft.jpg?w=390&h=270&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 420px)"
                          />
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/tours/thailand/songkran/36160274_kpbft.jpg?w=710&h=490&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 768px)"
                          />
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/tours/thailand/songkran/36160274_kpbft.jpg?w=400&h=300&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 1440px)"
                          />
                          <img
                            class="tab-box-content__left-img tab-box-content__left-img--first lazy lazy--no-fade-in animated animation-rollInLeftTop lazy"
                            data-src="https://backpacking-tours.imgix.net/storage/uploads/tours/thailand/songkran/36160274_kpbft.jpg?w=540&h=390&crop=faces&q=75&auto=format&fm=png"
                            width="1280"
                            height="853"
                            alt=""
                          />
                        </picture>
                        <picture>
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/tours/thailand/songkran/39433674_vwfpe.jpg?w=390&h=270&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 420px)"
                          />
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/tours/thailand/songkran/39433674_vwfpe.jpg?w=710&h=490&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 768px)"
                          />
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/tours/thailand/songkran/39433674_vwfpe.jpg?w=400&h=300&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 1440px)"
                          />
                          <img
                            class="tab-box-content__left-img tab-box-content__left-img--second lazy lazy--no-fade-in animated animation-rollInLeftTop lazy"
                            data-src="https://backpacking-tours.imgix.net/storage/uploads/tours/thailand/songkran/39433674_vwfpe.jpg?w=540&h=390&crop=faces&q=75&auto=format&fm=png"
                            width="1182"
                            height="887"
                            alt=""
                          />
                        </picture>
                      </div>
                      <div
                        class="flex-box__col flex-box__col-40 animation-fadeInUp"
                      >
                        <div
                          class="card card--no-border card--shadow-orange bg-white"
                        >
                          <div
                            class="card__content card__content--padding-xl"
                          >
                            <div
                              class="card__headline card__headline--with-chip-mob card__headline--price-top-mob card__headline--with-price"
                            >
                              <div class="headline-wave">
                                <h3 class="headline-3">
                                  Dune Buggy Tour (January)
                                </h3>
                                <svg
                                  width="100px"
                                  height="16px"
                                  class="stroke-orange"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xlink:href="images/icons.svg#icon-wave-squiggle"
                                  />
                                </svg>
                              </div>
                              <div
                                class="card__headline-price-wrapper card__headline-price-wrapper--flex-col mt-5em"
                              >
                                <div class="card__headline-price-values">
                                  <div
                                    class="card__headline-price-main bg-orange"
                                  >
                                    $895
                                    <span
                                      class="card__headline-price-was text-upper bg-orangeDark"
                                    >
                                      From
                                    </span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <p>
                              Quads Dubai is proud and thrilled to
                              announce a unique 9-day Thailand tour, to
                              celebrate the Thai New Year and our own 10-year
                              anniversary! Songkran is the world's largest
                              water fight lasting 4 days!! Oh, yeah, and our
                              birthday bash...
                            </p>
                            <ul
                              class="list-tour-info list-tour-info--two-cols"
                            >
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-orange"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-calendar-range"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Length</b> <span>9 Days</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-orange"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-baby-face-outline"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Avg. Age</b> <span>18-45</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-orange"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-rowing"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>No. Of Activities</b> <span>6</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-orange"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-silverware-fork-knife"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>No. Of Meals</b> <span>9</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-orange"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-account-multiple"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Avg. Group Size</b> <span>30+</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-orange"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-star"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Operator</b>
                                  <span>Quads Dubai</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-orange"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-map"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Starting Point</b> <span>Bangkok</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-orange"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-map"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Ending Point</b> <span>Chiang Mai</span>
                                </div>
                              </li>
                            </ul>
                            <div
                              class="card__footer card__footer--with-chip pt-20em"
                            >
                              <div>
                                <span class="chip chip--orange">
                                  Group Tour
                                </span>
                              </div>
                              <a
                                class="btn btn--purple"
                                href="book-a-backpacking-tour/songkran-tour-april.html"
                                title="View now"
                              >
                                View Tour
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div
                        class="flex-box__col flex-box__col-25 flex-box__col--right tab-box-content__right-col"
                      >
                        <picture>
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/tours/thailand/songkran/chiang-mai-itinerary_flprl.jpg?w=390&h=270&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 420px)"
                          />
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/tours/thailand/songkran/chiang-mai-itinerary_flprl.jpg?w=710&h=490&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 768px)"
                          />
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/tours/thailand/songkran/chiang-mai-itinerary_flprl.jpg?w=400&h=300&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 1440px)"
                          />
                          <img
                            class="tab-box-content__right-img tab-box-content__right-img--first lazy lazy--no-fade-in animated animation-rollInRightTop lazy"
                            data-src="https://backpacking-tours.imgix.net/storage/uploads/tours/thailand/songkran/chiang-mai-itinerary_flprl.jpg?w=540&h=390&crop=faces&q=75&auto=format&fm=png"
                            width="1100"
                            height="786"
                            alt=""
                          />
                        </picture>
                        <picture>
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/tours/thailand/songkran/Songkran-Festival_uimph.jpg?w=390&h=270&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 420px)"
                          />
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/tours/thailand/songkran/Songkran-Festival_uimph.jpg?w=710&h=490&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 768px)"
                          />
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/tours/thailand/songkran/Songkran-Festival_uimph.jpg?w=400&h=300&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 1440px)"
                          />
                          <img
                            class="tab-box-content__right-img tab-box-content__right-img--second lazy lazy--no-fade-in animated animation-rollInRightTop lazy"
                            data-src="https://backpacking-tours.imgix.net/storage/uploads/tours/thailand/songkran/Songkran-Festival_uimph.jpg?w=540&h=390&crop=faces&q=75&auto=format&fm=png"
                            width="1024"
                            height="683"
                            alt=""
                          />
                        </picture>
                      </div>
                    </div>
                  </div>
                </div>
                <button
                  class="js-trip-slider-prev swiper-button swiper-button--prev"
                  aria-label="Previous tour"
                  type="button"
                >
                  <svg width="24" height="24">
                    <use xlink:href="images/icons.svg#icon-play-button"></use>
                  </svg>
                </button>
                <button
                  class="js-trip-slider-next swiper-button"
                  aria-label="Next tour"
                  type="button"
                >
                  <svg width="24" height="24">
                    <use xlink:href="images/icons.svg#icon-play-button"></use>
                  </svg>
                </button>
                <div
                  class="js-trip-slider-pagination swiper-pagination"
                ></div>
              </div>
              <p class="text-center">
                <a
                  class="btn btn--black"
                  href="book-a-backpacking-tource30.html?country=Thailand"
                >
                  View All Dune Buggy Tours
                </a>
              </p>
            </div>
            <div
              class="tab-box-content bg-orangeBlood border-img-top border-img-top--orangeBlood border-img-bottom border-img-bottom--orangeBlood js-tabContent"
              data-content="tab-6"
            >
              <div
                class="container-extra-large bg-backpack-right bg-backpack-right--sm-none bg-backpack-right--to-rt swiper swiper--trip js-trip-slider"
              >
                <div
                  class="js-trip-slider-pagination swiper-pagination swiper-pagination--top"
                ></div>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="flex-box align-items-center">
                      <div
                        class="flex-box__col flex-box__col-30 pr-10em text-center"
                      >
                        <a
                          href="https://www.youtube.com/watch?v=7K7cu4Aqrxk"
                          class="play-video play-video--bordered play-video--no-cover rotate-left js-video animation-rollInLeft"
                          title="Watch video"
                          aria-label="Watch video"
                        >
                          <!--<picture>
                            <source
                              data-srcset="https://backpacking-tours.imgix.net/storage/uploads/images/video-bg/cambodia-groupshot_ypgzt.jpg?w=380&h=250&crop=faces&q=75&auto=format&fm=png"
                              media="(max-width: 420px)"
                            />
                            <source
                              data-srcset="https://backpacking-tours.imgix.net/storage/uploads/images/video-bg/cambodia-groupshot_ypgzt.jpg?w=690&h=460&crop=faces&q=75&auto=format&fm=png"
                              media="(max-width: 768px)"
                            />
                            <source
                              data-srcset="https://backpacking-tours.imgix.net/storage/uploads/images/video-bg/cambodia-groupshot_ypgzt.jpg?w=330&h=220&crop=faces&q=75&auto=format&fm=png"
                              media="(max-width: 1440px)"
                            />
                            <img
                              class="lazy"
                              data-src="https://backpacking-tours.imgix.net/storage/uploads/images/video-bg/cambodia-groupshot_ypgzt.jpg?w=430&h=290&crop=faces&q=75&auto=format&fm=png"
                              width="2500"
                              height="1667"
                              alt="Backpacking Cambodia"
                            />
                          </picture>-->
                          <picture>
                            <img
                              src="{{asset ('assets/front/images/c98b85663f7b6f40015c8035c23ef7b7.jpg')}}"
                              media="(max-width: 420px)"
                            />
                            <img
                              class="lazy"
                              data-src="{{asset ('assets/front/images/c98b85663f7b6f40015c8035c23ef7b7.jpg')}}"
                              width="2500"
                              height="1667"
                              alt="Backpacking Vietnam"
                            />
                          </picture>
                          <img
                            class="play-video__icon play-video__icon--width lazy"
                            data-src="{{ asset('assets/front/images/icons/play-button.svg')}}"
                            alt="Play Video"
                          />
                        </a>
                        <svg width="200">
                          <use
                            xlink:href="{{asset ('assets/front/images/icons.svg#icon-watch-the-video')}}"
                          />
                        </svg>
                      </div>
                      <div
                        class="flex-box__col flex-box__col-40 animation-fadeInUp"
                      >
                        <div
                          class="card card--no-border card--shadow-orangeBlood bg-white"
                        >
                          <div
                            class="card__content card__content--padding-xl"
                          >
                            <div
                              class="card__headline card__headline--with-chip-mob card__headline--price-top-mob card__headline--with-price"
                            >
                              <div class="headline-wave">
                                <h3 class="headline-3">
                                  Desert Advanture Tour
                                </h3>
                                <svg
                                  width="100px"
                                  height="16px"
                                  class="stroke-orangeBlood"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xlink:href="images/icons.svg#icon-wave-squiggle"
                                  />
                                </svg>
                              </div>
                              <div
                                class="card__headline-price-wrapper card__headline-price-wrapper--flex-col mt-5em"
                              >
                                <div class="card__headline-price-values">
                                  <div
                                    class="card__headline-price-main bg-orangeBlood"
                                  >
                                    $865
                                    <span
                                      class="card__headline-price-was text-upper bg-orangeBloodDark"
                                    >
                                      From
                                    </span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <p>
                              From ancient Angkor Wat to the pristine beaches
                              of Koh Rong and so much more, this tour covers
                              the best of Cambodia!
                            </p>
                            <ul
                              class="list-tour-info list-tour-info--two-cols"
                            >
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-orangeBlood"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-calendar-range"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Length</b> <span>11 Days</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-orangeBlood"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-baby-face-outline"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Avg. Age</b> <span>18-39</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-orangeBlood"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-rowing"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>No. Of Activities</b> <span>20</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-orangeBlood"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-silverware-fork-knife"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>No. Of Meals</b> <span>12</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-orangeBlood"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-account-multiple"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Avg. Group Size</b> <span>12-16</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-orangeBlood"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-star"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Operator</b>
                                  <span>Quads Dubai</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-orangeBlood"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-map"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Starting Point</b> <span>Siem Reap</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-orangeBlood"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-map"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Ending Point</b> <span>Siem Reap</span>
                                </div>
                              </li>
                            </ul>
                            <div
                              class="card__footer card__footer--with-chip pt-20em"
                            >
                              <div>
                                <span class="chip chip--orangeBlood">
                                  Group Tour
                                </span>
                              </div>
                              <a
                                class="btn btn--purple"
                                href="cambodia-backpacking-tour.html"
                                title="View now"
                              >
                                View Tour
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="flex-box__col flex-box__col-30 pl-10em">
                        <div class="fb-review text-center">
                          <picture>
                            <img
                              class="fb-review__img rotate-right lazy animated rollInRight active loaded"
                              src="{{asset ('assets/front/images/morning-desert-safari-tour-1.jpg')}}"
                              media="(max-width: 420px)"
                            />
                            <img
                              class="lazy"
                              data-src="{{asset ('assets/front/images/morning-desert-safari-tour-1.jpg')}}"
                              width="2500"
                              height="1667"
                              alt="Backpacking Vietnam"
                            />
                          </picture>

                          <div class="fb-review__comment">
                            <p>
                              Literally had the Time of my life on this tour!
                              I was so nervous with it being my first time to
                              travel so far alone and I'm so glad I came with
                              BTC
                            </p>
                            <p class="headline-8">
                              lucia,<br />
                              Facebook, 20 Feb 2021
                            </p>
                          </div>
                          <script type="application/ld+json">
                            {
                              "@context": "https://schema.org/",
                              "@type": "Product",
                              "name": "Quads Dubai",
                              "description": "Travel the best of Cambodia and meet new friends with all accommodation, activities, in-country transport, and 12 meals included! Check out all trips and everything included in the 11-day tour package.",
                              "image": [
                                "https://www.backpackingtours.com/storage/uploads/images/seo1200x1200/BT-SEO_ngwll.jpg"
                              ],
                              "brand": {
                                "@type": "Thing",
                                "name": "Quads Dubai"
                              },
                              "aggregateRating": {
                                "@type": "AggregateRating",
                                "ratingValue": "5",
                                "reviewCount": "538"
                              }
                            }
                          </script>
                          <p
                            class="headline-5 mt-10em flex flex--middle flex--center"
                          >
                            <svg
                              width="22px"
                              height="22px"
                              class="fill-white"
                              aria-hidden="true"
                              aria-focusable="false"
                            >
                              <use
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                xlink:href="images/icons.svg#icon-star"
                              ></use>
                            </svg>
                            <svg
                              width="22px"
                              height="22px"
                              class="fill-white"
                              aria-hidden="true"
                              aria-focusable="false"
                            >
                              <use
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                xlink:href="images/icons.svg#icon-star"
                              ></use>
                            </svg>
                            <svg
                              width="22px"
                              height="22px"
                              class="fill-white"
                              aria-hidden="true"
                              aria-focusable="false"
                            >
                              <use
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                xlink:href="images/icons.svg#icon-star"
                              ></use>
                            </svg>
                            <svg
                              width="22px"
                              height="22px"
                              class="fill-white"
                              aria-hidden="true"
                              aria-focusable="false"
                            >
                              <use
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                xlink:href="images/icons.svg#icon-star"
                              ></use>
                            </svg>
                            <svg
                              width="22px"
                              height="22px"
                              class="fill-white"
                              aria-hidden="true"
                              aria-focusable="false"
                            >
                              <use
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                xlink:href="images/icons.svg#icon-star"
                              ></use>
                            </svg>
                          </p>
                          <span class="headline-9 underline">
                            Rated <span>5</span>/5 by
                            <a
                              class="color-white"
                              target="_blank"
                              href="https://www.facebook.com/backpackingtours/"
                              rel="noopener nofollow"
                            >
                              <span>1000</span> Travellers on Facebook
                            </a>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="js-trip-slider-pagination swiper-pagination"
                ></div>
              </div>
              <p class="text-center">
                <a
                  class="btn btn--black"
                  href="book-a-backpacking-tour2424.html?country=Cambodia"
                >
                  View All Desert Advanture Tours
                </a>
              </p>
            </div>
            <div
              class="tab-box-content bg-blurple border-img-top border-img-top--blurple border-img-bottom border-img-bottom--blurple js-tabContent"
              data-content="tab-3"
            >
              <div
                class="container-extra-large bg-backpack-right bg-backpack-right--sm-none bg-backpack-right--to-rt swiper swiper--trip js-trip-slider"
              >
                <div
                  class="js-trip-slider-pagination swiper-pagination swiper-pagination--top"
                ></div>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="flex-box align-items-center">
                      <div
                        class="flex-box__col flex-box__col-30 pr-10em text-center"
                      >
                        <a
                          href="https://www.youtube.com/watch?v=zxHeb4qbPtU"
                          class="play-video play-video--bordered play-video--no-cover rotate-left js-video animation-rollInLeft"
                          title="Watch video"
                          aria-label="Watch video"
                        >
                          <!-- <picture>
                            <source
                              data-srcset="https://backpacking-tours.imgix.net/storage/uploads/images/video-bg/bali-groupshot3_nwpwo.jpg?w=380&h=250&crop=faces&q=75&auto=format&fm=png"
                              media="(max-width: 420px)"
                            />
                            <source
                              data-srcset="https://backpacking-tours.imgix.net/storage/uploads/images/video-bg/bali-groupshot3_nwpwo.jpg?w=690&h=460&crop=faces&q=75&auto=format&fm=png"
                              media="(max-width: 768px)"
                            />
                            <source
                              data-srcset="https://backpacking-tours.imgix.net/storage/uploads/images/video-bg/bali-groupshot3_nwpwo.jpg?w=330&h=220&crop=faces&q=75&auto=format&fm=png"
                              media="(max-width: 1440px)"
                            />
                            <img
                              class="lazy"
                              data-src="https://backpacking-tours.imgix.net/storage/uploads/images/video-bg/bali-groupshot3_nwpwo.jpg?w=430&h=290&crop=faces&q=75&auto=format&fm=png"
                              width="2500"
                              height="1667"
                              alt="Backpacking Bali"
                            />
                          </picture>-->
                          <picture>
                            <img
                              src="{{asset ('assets/front/images/2021-Kawasaki-Teryx4-S-LE-and-Teryx-S-LE-5-of-5-2.jpg')}}"
                              media="(max-width: 420px)"
                            />
                            <img
                              class="lazy"
                              data-src="{{asset ('assets/front/images/2021-Kawasaki-Teryx4-S-LE-and-Teryx-S-LE-5-of-5-2.jpg')}}"
                              width="2500"
                              height="1667"
                              alt="Backpacking Vietnam"
                            />
                          </picture>
                          <img
                            class="play-video__icon play-video__icon--width lazy"
                            data-src="{{asset ('assets/front/images/icons/play-button.svg')}}"
                            alt="Play Video"
                          />
                        </a>
                        <svg width="200">
                          <use
                            xlink:href="{{asset ('assets/front/images/icons.svg#icon-watch-the-video')}}"
                          />
                        </svg>
                      </div>
                      <div
                        class="flex-box__col flex-box__col-40 animation-fadeInUp"
                      >
                        <div
                          class="card card--no-border card--shadow-blurple bg-white"
                        >
                          <div
                            class="card__content card__content--padding-xl"
                          >
                            <div
                              class="card__headline card__headline--with-chip-mob card__headline--price-top-mob card__headline--with-price"
                            >
                              <div class="headline-wave">
                                <h3 class="headline-3">Forest Ride Tour</h3>
                                <svg
                                  width="100px"
                                  height="16px"
                                  class="stroke-blurple"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xlink:href="{{asset ('assets/front/images/icons.svg#icon-wave-squiggle')}}"
                                  />
                                </svg>
                              </div>
                              <div
                                class="card__headline-price-wrapper card__headline-price-wrapper--flex-col mt-5em"
                              >
                                <div class="card__headline-price-values">
                                  <div
                                    class="card__headline-price-main bg-blurple"
                                  >
                                    $1460
                                    <span
                                      class="card__headline-price-was text-upper bg-blurpleDark"
                                    >
                                      From
                                    </span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <p>
                              Absolutely epic! Cliff temples in Uluwatu,
                              sunset at Tanah Lot, SUP in Nusa Lembongan, so
                              many waterfalls, snorkel with sea turtles, Gili
                              T beaches and more.
                            </p>
                            <ul
                              class="list-tour-info list-tour-info--two-cols"
                            >
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-blurple"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-calendar-range"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Length</b> <span>18 Days</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-blurple"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-baby-face-outline"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Avg. Age</b> <span>18-39</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-blurple"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-rowing"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>No. Of Activities</b> <span>32</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-blurple"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-silverware-fork-knife"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>No. Of Meals</b> <span>23</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-blurple"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-account-multiple"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Avg. Group Size</b> <span>16 - 24</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-blurple"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-star"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Operator</b>
                                  <span>Quad Dubai</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-blurple"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-map"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Starting Point</b> <span>Kuta</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-blurple"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-map"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Ending Point</b> <span>Kuta</span>
                                </div>
                              </li>
                            </ul>
                            <div
                              class="card__footer card__footer--with-chip pt-20em"
                            >
                              <div>
                                <span class="chip chip--blurple">
                                  Group Tour
                                </span>
                              </div>
                              <a
                                class="btn btn--purple"
                                href="bali-backpacking-tour.html"
                                title="View now"
                              >
                                View Tour
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="flex-box__col flex-box__col-30 pl-10em">
                        <div class="fb-review text-center">
                          <picture>
                            <img
                              class="fb-review__img rotate-right lazy animated rollInRight active loaded"
                              src="{{asset ('assets/front/images/sand-skiing.jpg')}}"
                              media="(max-width: 420px)"
                            />
                            <img
                              class="lazy"
                              data-src="{{asset ('assets/front/images/sand-skiing.jpg')}}"
                              width="2500"
                              height="1667"
                              alt="Backpacking Vietnam"
                            />
                          </picture>
                          <div class="fb-review__comment">
                            <p>
                              I can’t recommend this company enough! This is
                              my third tour with backpacking and again it’s a
                              very well organised and hits all the major spots
                              you would want to see in Bali!
                            </p>
                            <p class="headline-8">
                              James,<br />
                              Facebook, 14 Dec 2021
                            </p>
                          </div>
                          <script type="application/ld+json">
                            {
                              "@context": "https://schema.org/",
                              "@type": "Product",
                              "name": "Quads Dubai",
                              "description": "Travel the best of Bali and meet new friends with all accommodation, activities, in-country transport, and 21 meals included! Check out all trips and everything included in the 18-day tour package.",
                              "image": [
                                "https://www.backpackingtours.com/storage/uploads/images/seo1200x1200/BT-SEO_ngwll.jpg"
                              ],
                              "brand": {
                                "@type": "Thing",
                                "name": "Quads Dubai"
                              },
                              "aggregateRating": {
                                "@type": "AggregateRating",
                                "ratingValue": "5",
                                "reviewCount": "538"
                              }
                            }
                          </script>
                          <p
                            class="headline-5 mt-10em flex flex--middle flex--center"
                          >
                            <svg
                              width="22px"
                              height="22px"
                              class="fill-white"
                              aria-hidden="true"
                              aria-focusable="false"
                            >
                              <use
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                xlink:href="images/icons.svg#icon-star"
                              ></use>
                            </svg>
                            <svg
                              width="22px"
                              height="22px"
                              class="fill-white"
                              aria-hidden="true"
                              aria-focusable="false"
                            >
                              <use
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                xlink:href="images/icons.svg#icon-star"
                              ></use>
                            </svg>
                            <svg
                              width="22px"
                              height="22px"
                              class="fill-white"
                              aria-hidden="true"
                              aria-focusable="false"
                            >
                              <use
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                xlink:href="images/icons.svg#icon-star"
                              ></use>
                            </svg>
                            <svg
                              width="22px"
                              height="22px"
                              class="fill-white"
                              aria-hidden="true"
                              aria-focusable="false"
                            >
                              <use
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                xlink:href="images/icons.svg#icon-star"
                              ></use>
                            </svg>
                            <svg
                              width="22px"
                              height="22px"
                              class="fill-white"
                              aria-hidden="true"
                              aria-focusable="false"
                            >
                              <use
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                xlink:href="images/icons.svg#icon-star"
                              ></use>
                            </svg>
                          </p>
                          <span class="headline-9 underline">
                            Rated <span>5</span>/5 by
                            <a
                              class="color-white"
                              target="_blank"
                              href="https://www.facebook.com/backpackingtours/"
                              rel="noopener nofollow"
                            >
                              <span>1000</span> Travellers on Facebook
                            </a>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="js-trip-slider-pagination swiper-pagination"
                ></div>
              </div>
              <p class="text-center">
                <a
                  class="btn btn--black"
                  href="book-a-backpacking-tour701c.html?country=Bali"
                >
                  View All Other Tours
                </a>
              </p>
            </div>
            <div
              class="tab-box-content tab-box-content--active bg-purple border-img-top border-img-top--blue border-img-bottom border-img-bottom--blue js-tabContent"
              data-content="tab-8"
            >
              <div
                class="container-extra-large bg-backpack-right bg-backpack-right--sm-none bg-backpack-right--to-rt swiper swiper--trip js-trip-slider"
              >
                <div
                  class="js-trip-slider-pagination swiper-pagination swiper-pagination--top"
                ></div>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="flex-box align-items-center">
                      <div
                        class="flex-box__col flex-box__col-30 pr-10em text-center"
                      >
                        <a
                          href="https://www.youtube.com/watch?v=RQzTzJPanrs"
                          class="play-video play-video--bordered play-video--no-cover rotate-left js-video animation-rollInLeft"
                          title="Watch video"
                          aria-label="Watch video"
                        >
                          <picture>
                            <img
                              src="{{asset ('assets/front/images/Aishwarya-Pissay-in-action-in-her-Yamaha-450F-1024x683.jpg')}}"
                              media="(max-width: 420px)"
                            />
                            <img
                              class="lazy"
                              data-src="{{asset ('assets/front/images/Aishwarya-Pissay-in-action-in-her-Yamaha-450F-1024x683.jpg')}}"
                              width="2500"
                              height="1667"
                              alt="Backpacking Vietnam"
                            />
                          </picture>
                          <img
                            class="play-video__icon play-video__icon--width lazy"
                            data-src="{{asset ('assets/front/images/icons/play-button.svg')}}"
                            alt="Play Video"
                          />
                        </a>
                        <svg width="200">
                          <use
                            xlink:href="{{asset ('assets/front/images/icons.svg#icon-watch-the-video')}}"
                          />
                        </svg>
                      </div>
                      <div
                        class="flex-box__col flex-box__col-40 animation-fadeInUp"
                      >
                        <div
                          class="card card--no-border card--shadow-blue bg-white"
                        >
                          <div
                            class="card__content card__content--padding-xl"
                          >
                            <div
                              class="card__headline card__headline--with-chip-mob card__headline--price-top-mob card__headline--with-price"
                            >
                              <div class="headline-wave">
                                <h3 class="headline-3">Other Tour</h3>
                                <svg
                                  width="100px"
                                  height="16px"
                                  class="stroke-blue"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xlink:href="images/icons.svg#icon-wave-squiggle"
                                  />
                                </svg>
                              </div>
                              <div
                                class="card__headline-price-wrapper card__headline-price-wrapper--flex-col mt-5em"
                              >
                                <div class="card__headline-price-values">
                                  <div
                                    class="card__headline-price-main bg-purple"
                                  >
                                    $2205
                                    <span
                                      class="card__headline-price-was text-upper bg-blueDark"
                                    >
                                      From
                                    </span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <p>Ultimate adventure!</p>
                            <ul
                              class="list-tour-info list-tour-info--two-cols"
                            >
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-blue"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-calendar-range"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Length</b> <span>23 Days</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-blue"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-baby-face-outline"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Avg. Age</b> <span>18-39</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-blue"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-rowing"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>No. Of Activities</b> <span>30+</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-blue"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-silverware-fork-knife"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>No. Of Meals</b> <span>28</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-blue"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-account-multiple"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Avg. Group Size</b> <span>14 - 20</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-blue"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-star"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Operator</b>
                                  <span>Quads Dubai</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-blue"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-map"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Starting Point</b> <span>Hanoi</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-blue"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-map"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Ending Point</b> <span>Ho Chi Minh</span>
                                </div>
                              </li>
                            </ul>
                            <div
                              class="card__footer card__footer--with-chip pt-20em"
                            >
                              <div>
                                <span class="chip chip--blue">
                                  Group Tour
                                </span>
                              </div>
                              <a
                                class="btn btn--purple"
                                href="vietnam-backpacking-tour.html"
                                title="View now"
                              >
                                View Tour
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="flex-box__col flex-box__col-30 pl-10em">
                        <div class="fb-review text-center">
                          <!--<picture>
                            <source
                              data-srcset="https://backpacking-tours.imgix.net/storage/uploads/reviews/frontpage/review-homepage_0000_Layer%203_zneuf.jpg?w=380&h=250&crop=faces&q=75&auto=format&fm=png"
                              media="(max-width: 420px)"
                            />
                            <source
                              data-srcset="https://backpacking-tours.imgix.net/storage/uploads/reviews/frontpage/review-homepage_0000_Layer%203_zneuf.jpg?w=690&h=460&crop=faces&q=75&auto=format&fm=png"
                              media="(max-width: 768px)"
                            />
                            <source
                              data-srcset="https://backpacking-tours.imgix.net/storage/uploads/reviews/frontpage/review-homepage_0000_Layer%203_zneuf.jpg?w=330&h=220&crop=faces&q=75&auto=format&fm=png"
                              media="(max-width: 1440px)"
                            />
                            <img
                              class="fb-review__img rotate-right animation-rollInRight lazy"
                              data-src="https://backpacking-tours.imgix.net/storage/uploads/reviews/frontpage/review-homepage_0000_Layer%203_zneuf.jpg?w=430&h=290&crop=faces&q=75&auto=format&fm=png"
                              width="2500"
                              height="1668"
                              alt="Backpacking Vietnam"
                            />
                          </picture>-->
                          <picture>
                            <img
                              class="fb-review__img rotate-right lazy animated rollInRight active loaded"
                              src="{{asset ('assets/front/images/sand-skiing.jpg')}}"
                              media="(max-width: 420px)"
                            />
                            <img
                              class="lazy"
                              data-src="{{asset ('assets/front/images/sand-skiing.jpg')}}"
                              width="2500"
                              height="1667"
                              alt="Backpacking Vietnam"
                            />
                          </picture>
                          <div class="fb-review__comment">
                            <p>
                              This was such an amazing experience! Still can't
                              believe how much we did in 23 days, 'thank you'
                              do not express how grateful I am, these are
                              memories that will last me a lifetime. If you
                              are considering BTV, go for it!
                            </p>
                            <p class="headline-8">
                              Mike,<br />
                              Facebook, 29 Oct 2021
                            </p>
                          </div>
                          {{-- <script type="application/ld+json">
                            {
                              "@context": "https://schema.org/",
                              "@type": "Product",
                              "name": "Quads Dubai",
                              "description": "Travel the best of Vietnam and meet new friends with all accommodation, activities, in-country transport, and 30 meals included! Check out all trips and everything included in the 23-day tour package.",
                              "image": [
                                "https://www.backpackingtours.com/storage/uploads/images/seo1200x1200/BT-SEO_ngwll.jpg"
                              ],
                              "brand": {
                                "@type": "Thing",
                                "name": "Quads Dubai"
                              },
                              "aggregateRating": {
                                "@type": "AggregateRating",
                                "ratingValue": "5",
                                "reviewCount": "538"
                              }
                            }
                          </script> --}}
                          <p
                            class="headline-5 mt-10em flex flex--middle flex--center"
                          >
                            <svg
                              width="22px"
                              height="22px"
                              class="fill-white"
                              aria-hidden="true"
                              aria-focusable="false"
                            >
                              <use
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                xlink:href="{{asset ('assets/front/images/icons.svg#icon-star')}}"
                              ></use>
                            </svg>
                            <svg
                              width="22px"
                              height="22px"
                              class="fill-white"
                              aria-hidden="true"
                              aria-focusable="false"
                            >
                              <use
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                xlink:href="images/icons.svg#icon-star"
                              ></use>
                            </svg>
                            <svg
                              width="22px"
                              height="22px"
                              class="fill-white"
                              aria-hidden="true"
                              aria-focusable="false"
                            >
                              <use
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                xlink:href="images/icons.svg#icon-star"
                              ></use>
                            </svg>
                            <svg
                              width="22px"
                              height="22px"
                              class="fill-white"
                              aria-hidden="true"
                              aria-focusable="false"
                            >
                              <use
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                xlink:href="images/icons.svg#icon-star"
                              ></use>
                            </svg>
                            <svg
                              width="22px"
                              height="22px"
                              class="fill-white"
                              aria-hidden="true"
                              aria-focusable="false"
                            >
                              <use
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                xlink:href="images/icons.svg#icon-star"
                              ></use>
                            </svg>
                          </p>
                          <span class="headline-9 underline">
                            Rated <span>5</span>/5 by
                            <a
                              class="color-white"
                              target="_blank"
                              href="https://www.facebook.com/backpackingtours/"
                              rel="noopener nofollow"
                            >
                              <span>1000</span> Travellers on Facebook
                            </a>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="flex-box align-items-center">
                      <div
                        class="flex-box__col flex-box__col-25 flex-box__col--right tab-box-content__left-col"
                      >
                        <picture>
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/whats-included/vietnam/day3-4/vietnam-backpackingtours-activities-day3-4-3_yaubp.jpg?w=390&h=270&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 420px)"
                          />
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/whats-included/vietnam/day3-4/vietnam-backpackingtours-activities-day3-4-3_yaubp.jpg?w=710&h=490&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 768px)"
                          />
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/whats-included/vietnam/day3-4/vietnam-backpackingtours-activities-day3-4-3_yaubp.jpg?w=400&h=300&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 1440px)"
                          />
                          <img
                            class="tab-box-content__left-img tab-box-content__left-img--first lazy lazy--no-fade-in animated animation-rollInLeftTop lazy"
                            data-src="https://backpacking-tours.imgix.net/storage/uploads/whats-included/vietnam/day3-4/vietnam-backpackingtours-activities-day3-4-3_yaubp.jpg?w=540&h=390&crop=faces&q=75&auto=format&fm=png"
                            width="2500"
                            height="1875"
                            alt=""
                          />
                        </picture>
                        <picture>
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/images/video-bg/vietnam-groupshot_ddpag.jpg?w=390&h=270&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 420px)"
                          />
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/images/video-bg/vietnam-groupshot_ddpag.jpg?w=710&h=490&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 768px)"
                          />
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/images/video-bg/vietnam-groupshot_ddpag.jpg?w=400&h=300&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 1440px)"
                          />
                          <img
                            class="tab-box-content__left-img tab-box-content__left-img--second lazy lazy--no-fade-in animated animation-rollInLeftTop lazy"
                            data-src="https://backpacking-tours.imgix.net/storage/uploads/images/video-bg/vietnam-groupshot_ddpag.jpg?w=540&h=390&crop=faces&q=75&auto=format&fm=png"
                            width="2500"
                            height="1667"
                            alt=""
                          />
                        </picture>
                      </div>
                      <div
                        class="flex-box__col flex-box__col-40 animation-fadeInUp"
                      >
                        <div
                          class="card card--no-border card--shadow-blue bg-white"
                        >
                          <div
                            class="card__content card__content--padding-xl"
                          >
                            <div
                              class="card__headline card__headline--with-chip-mob card__headline--price-top-mob card__headline--with-price"
                            >
                              <div class="headline-wave">
                                <h3 class="headline-3">
                                  Moter Bike desert Advanture
                                </h3>
                                <svg
                                  width="100px"
                                  height="16px"
                                  class="stroke-blue"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xlink:href="images/icons.svg#icon-wave-squiggle"
                                  />
                                </svg>
                              </div>
                              <div
                                class="card__headline-price-wrapper card__headline-price-wrapper--flex-col mt-5em"
                              >
                                <div class="card__headline-price-values">
                                  <div
                                    class="card__headline-price-main bg-purple"
                                  >
                                    $1200
                                    <span
                                      class="card__headline-price-was text-upper bg-blueDark"
                                    >
                                      From
                                    </span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <ul
                              class="list-tour-info list-tour-info--two-cols"
                            >
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-blue"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-calendar-range"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Length</b> <span>12 Days</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-blue"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-baby-face-outline"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Avg. Age</b> <span>18-39</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-blue"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-rowing"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>No. Of Activities</b> <span>27</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-blue"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-silverware-fork-knife"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>No. Of Meals</b> <span>16</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-blue"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-account-multiple"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Avg. Group Size</b> <span>14 - 20</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-blue"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-star"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Operator</b>
                                  <span>Quads Dubai</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-blue"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-map"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Starting Point</b> <span>Hanoi</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-blue"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-map"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Ending Point</b> <span>Hoi An</span>
                                </div>
                              </li>
                            </ul>
                            <div
                              class="card__footer card__footer--with-chip pt-20em"
                            >
                              <div>
                                <span class="chip chip--blue">
                                  Group Tour
                                </span>
                              </div>
                              <a
                                class="btn btn--purple"
                                href="book-a-backpacking-tour/backpacking-vietnam-north.html"
                                title="View now"
                              >
                                View Tour
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div
                        class="flex-box__col flex-box__col-25 flex-box__col--right tab-box-content__right-col"
                      >
                        <picture>
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/whats-included/vietnam/day6/vietnam-backpackingtours-activities-day6-5_lldpf.jpg?w=390&h=270&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 420px)"
                          />
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/whats-included/vietnam/day6/vietnam-backpackingtours-activities-day6-5_lldpf.jpg?w=710&h=490&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 768px)"
                          />
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/whats-included/vietnam/day6/vietnam-backpackingtours-activities-day6-5_lldpf.jpg?w=400&h=300&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 1440px)"
                          />
                          <img
                            class="tab-box-content__right-img tab-box-content__right-img--first lazy lazy--no-fade-in animated animation-rollInRightTop lazy"
                            data-src="https://backpacking-tours.imgix.net/storage/uploads/whats-included/vietnam/day6/vietnam-backpackingtours-activities-day6-5_lldpf.jpg?w=540&h=390&crop=faces&q=75&auto=format&fm=png"
                            width="2500"
                            height="1875"
                            alt=""
                          />
                        </picture>
                        <picture>
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/whats-included/vietnam/day7/left-pn_afqfh.jpg?w=390&h=270&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 420px)"
                          />
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/whats-included/vietnam/day7/left-pn_afqfh.jpg?w=710&h=490&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 768px)"
                          />
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/whats-included/vietnam/day7/left-pn_afqfh.jpg?w=400&h=300&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 1440px)"
                          />
                          <img
                            class="tab-box-content__right-img tab-box-content__right-img--second lazy lazy--no-fade-in animated animation-rollInRightTop lazy"
                            data-src="https://backpacking-tours.imgix.net/storage/uploads/whats-included/vietnam/day7/left-pn_afqfh.jpg?w=540&h=390&crop=faces&q=75&auto=format&fm=png"
                            width="2500"
                            height="1875"
                            alt=""
                          />
                        </picture>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="flex-box align-items-center">
                      <div
                        class="flex-box__col flex-box__col-25 flex-box__col--right tab-box-content__left-col"
                      >
                        <picture>
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/whats-included/vietnam/day12/BTV24Jul2018%5BEOT%5D115-2_vuweb.jpg?w=390&h=270&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 420px)"
                          />
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/whats-included/vietnam/day12/BTV24Jul2018%5BEOT%5D115-2_vuweb.jpg?w=710&h=490&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 768px)"
                          />
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/whats-included/vietnam/day12/BTV24Jul2018%5BEOT%5D115-2_vuweb.jpg?w=400&h=300&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 1440px)"
                          />
                          <img
                            class="tab-box-content__left-img tab-box-content__left-img--first lazy lazy--no-fade-in animated animation-rollInLeftTop lazy"
                            data-src="https://backpacking-tours.imgix.net/storage/uploads/whats-included/vietnam/day12/BTV24Jul2018%5BEOT%5D115-2_vuweb.jpg?w=540&h=390&crop=faces&q=75&auto=format&fm=png"
                            width="2500"
                            height="1875"
                            alt=""
                          />
                        </picture>
                        <picture>
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/whats-included/vietnam/day14/vietnam-backpackingtours-activities-day14-15_nmnhf.jpg?w=390&h=270&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 420px)"
                          />
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/whats-included/vietnam/day14/vietnam-backpackingtours-activities-day14-15_nmnhf.jpg?w=710&h=490&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 768px)"
                          />
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/whats-included/vietnam/day14/vietnam-backpackingtours-activities-day14-15_nmnhf.jpg?w=400&h=300&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 1440px)"
                          />
                          <img
                            class="tab-box-content__left-img tab-box-content__left-img--second lazy lazy--no-fade-in animated animation-rollInLeftTop lazy"
                            data-src="https://backpacking-tours.imgix.net/storage/uploads/whats-included/vietnam/day14/vietnam-backpackingtours-activities-day14-15_nmnhf.jpg?w=540&h=390&crop=faces&q=75&auto=format&fm=png"
                            width="2500"
                            height="1875"
                            alt=""
                          />
                        </picture>
                      </div>
                      <div
                        class="flex-box__col flex-box__col-40 animation-fadeInUp"
                      >
                        <div
                          class="card card--no-border card--shadow-blue bg-white"
                        >
                          <div
                            class="card__content card__content--padding-xl"
                          >
                            <div
                              class="card__headline card__headline--with-chip-mob card__headline--price-top-mob card__headline--with-price"
                            >
                              <div class="headline-wave">
                                <h3 class="headline-3">
                                  Moter Bike Forest Advanture
                                </h3>
                                <svg
                                  width="100px"
                                  height="16px"
                                  class="stroke-blue"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xlink:href="images/icons.svg#icon-wave-squiggle"
                                  />
                                </svg>
                              </div>
                              <div
                                class="card__headline-price-wrapper card__headline-price-wrapper--flex-col mt-5em"
                              >
                                <div class="card__headline-price-values">
                                  <div
                                    class="card__headline-price-main bg-purple"
                                  >
                                    $1145
                                    <span
                                      class="card__headline-price-was text-upper bg-blueDark"
                                    >
                                      From
                                    </span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <ul
                              class="list-tour-info list-tour-info--two-cols"
                            >
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-blue"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-calendar-range"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Length</b> <span>12 Days</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-blue"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-baby-face-outline"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Avg. Age</b> <span>18-39</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-blue"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-rowing"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>No. Of Activities</b> <span>18</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-blue"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-silverware-fork-knife"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>No. Of Meals</b> <span>13</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-blue"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-account-multiple"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Avg. Group Size</b> <span>14 - 20</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-blue"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-star"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Operator</b>
                                  <span>Quads Dubai</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-blue"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-map"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Starting Point</b> <span>Hoi An</span>
                                </div>
                              </li>
                              <li class="list-tour-info__item">
                                <svg
                                  width="36px"
                                  height="36px"
                                  class="fill-blue"
                                  aria-hidden="true"
                                  aria-focusable="false"
                                >
                                  <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="images/icons.svg#icon-map"
                                  ></use>
                                </svg>
                                <div class="list-tour-info__item-desc">
                                  <b>Ending Point</b> <span>Ho Chi Minh</span>
                                </div>
                              </li>
                            </ul>
                            <div
                              class="card__footer card__footer--with-chip pt-20em"
                            >
                              <div>
                                <span class="chip chip--blue">
                                  Group Tour
                                </span>
                              </div>
                              <a
                                class="btn btn--purple"
                                href="book-a-backpacking-tour/backpacking-vietnam-south.html"
                                title="View now"
                              >
                                View Tour
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div
                        class="flex-box__col flex-box__col-25 flex-box__col--right tab-box-content__right-col"
                      >
                        <picture>
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/whats-included/vietnam/day16/IMG_7342_vvqxr.jpg?w=390&h=270&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 420px)"
                          />
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/whats-included/vietnam/day16/IMG_7342_vvqxr.jpg?w=710&h=490&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 768px)"
                          />
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/whats-included/vietnam/day16/IMG_7342_vvqxr.jpg?w=400&h=300&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 1440px)"
                          />
                          <img
                            class="tab-box-content__right-img tab-box-content__right-img--first lazy lazy--no-fade-in animated animation-rollInRightTop lazy"
                            data-src="https://backpacking-tours.imgix.net/storage/uploads/whats-included/vietnam/day16/IMG_7342_vvqxr.jpg?w=540&h=390&crop=faces&q=75&auto=format&fm=png"
                            width="2000"
                            height="1500"
                            alt=""
                          />
                        </picture>
                        <picture>
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/whats-included/vietnam/day17/vietnam-backpackingtours-activities-day17-4_tczqd.jpg?w=390&h=270&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 420px)"
                          />
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/whats-included/vietnam/day17/vietnam-backpackingtours-activities-day17-4_tczqd.jpg?w=710&h=490&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 768px)"
                          />
                          <source
                            data-srcset="https://backpacking-tours.imgix.net/storage/uploads/whats-included/vietnam/day17/vietnam-backpackingtours-activities-day17-4_tczqd.jpg?w=400&h=300&crop=faces&q=75&auto=format&fm=png"
                            media="(max-width: 1440px)"
                          />
                          <img
                            class="tab-box-content__right-img tab-box-content__right-img--second lazy lazy--no-fade-in animated animation-rollInRightTop lazy"
                            data-src="https://backpacking-tours.imgix.net/storage/uploads/whats-included/vietnam/day17/vietnam-backpackingtours-activities-day17-4_tczqd.jpg?w=540&h=390&crop=faces&q=75&auto=format&fm=png"
                            width="2500"
                            height="1875"
                            alt=""
                          />
                        </picture>
                      </div>
                    </div>
                  </div>
                </div>
                <button
                  class="js-trip-slider-prev swiper-button swiper-button--prev"
                  aria-label="Previous tour"
                  type="button"
                >
                  <svg width="24" height="24">
                    <use xlink:href="images/icons.svg#icon-play-button"></use>
                  </svg>
                </button>
                <button
                  class="js-trip-slider-next swiper-button"
                  aria-label="Next tour"
                  type="button"
                >
                  <svg width="24" height="24">
                    <use xlink:href="images/icons.svg#icon-play-button"></use>
                  </svg>
                </button>
                <div
                  class="js-trip-slider-pagination swiper-pagination"
                ></div>
              </div>
              <p class="text-center">
                <a
                  class="btn btn--black"
                  href="book-a-backpacking-tour8130.html?country=Vietnam"
                >
                  View All Moter Biking Tours
                </a>
              </p>
            </div>
          </div>
        </section>
        <section
          class="bg-green border-img border-img-top border-img-top--green border-img-bottom border-img-bottom--green border-img--jaw"
        >
          <div class="container">
            <div class="box-photo bg-backpack-left">
              <div class="box-photo__left animation-fadeInUp shadow">
                <div class="headline-wave">
                  <h3 class="headline-2">Group Tour Deals</h3>
                  <svg width="100px" height="16px" class="stroke-green">
                    <use xlink:href="images/icons.svg#icon-jaw-squiggle" />
                  </svg>
                </div>
                <p>
                  Book a tour today and enjoy exclusive savings on any future
                  trip you book! There’s no time limit or expiry date on these
                  savings.
                </p>
                <div class="box-multi box-multi--line-behind">
                  <div
                    class="box-multi__item box-multi__item--left border--green"
                  >
                    <span class="box-multi__headline">10%</span><br />Discount
                    on 2nd Tour
                  </div>
                  <div
                    class="box-multi__item box-multi__item--right border--green"
                  >
                    <span class="box-multi__headline">15%</span><br />Discount
                    on 3rd+ Tour
                  </div>
                </div>
                <a
                  class="btn btn--black"
                  href="tour-deals.html"
                  title="Find Out More"
                >
                  Find Out More
                </a>
              </div>
              <!--<div class="box-photo__right box-photo-img">
                <div
                  class="box-photo-img__item lazy"
                  id="image1-1669719281"
                  data-style="    @media screen and (max-width:420px) {  #image1-1669719281 {  background-image: url('https://backpacking-tours.imgix.net/storage/uploads/images/nam4_txrkj.jpg?h=500&crop=faces&q=75&auto=format&fm=png')  } }    @media screen and (min-width:421px) and (max-width:768px) {  #image1-1669719281 {  background-image: url('https://backpacking-tours.imgix.net/storage/uploads/images/nam4_txrkj.jpg?h=920&crop=faces&q=75&auto=format&fm=png')  } }    @media screen and (min-width:769px) and (max-width:1440px) {  #image1-1669719281 {  background-image: url('https://backpacking-tours.imgix.net/storage/uploads/images/nam4_txrkj.jpg?h=660&crop=faces&q=75&auto=format&fm=png')  } }    @media screen and (min-width:1441px) {  #image1-1669719281 {  background-image: url('https://backpacking-tours.imgix.net/storage/uploads/images/nam4_txrkj.jpg?h=660&crop=faces&q=75&auto=format&fm=png')  } }   "
                ></div>
                <div
                  class="box-photo-img__item lazy"
                  id="image2-1669719281"
                  data-style="    @media screen and (max-width:420px) {  #image2-1669719281 {  background-image: url('https://backpacking-tours.imgix.net/storage/uploads/images/nam1_ysjpp.jpg?w=450&h=380&crop=faces&q=75&auto=format&fm=png')  } }    @media screen and (min-width:421px) and (max-width:768px) {  #image2-1669719281 {  background-image: url('https://backpacking-tours.imgix.net/storage/uploads/images/nam1_ysjpp.jpg?w=830&h=530&crop=faces&q=75&auto=format&fm=png')  } }    @media screen and (min-width:769px) and (max-width:1440px) {  #image2-1669719281 {  background-image: url('https://backpacking-tours.imgix.net/storage/uploads/images/nam1_ysjpp.jpg?w=550&h=370&crop=faces&q=75&auto=format&fm=png')  } }    @media screen and (min-width:1441px) {  #image2-1669719281 {  background-image: url('https://backpacking-tours.imgix.net/storage/uploads/images/nam1_ysjpp.jpg?w=550&h=370&crop=faces&q=75&auto=format&fm=png')  } }   "
                ></div>
              </div>-->
              <div class="box-photo__right box-photo-img">
                <div class="box-photo-img__item lazy" id="image1-1669719281">
                  <img src="{{asset ('assets/front/images/kid2.jpg')}}" />
                </div>
                <div class="box-photo-img__item lazy" id="image2-1669719281">
                  <img src="{{asset ('assets/front/images/image-107754_2012_Yamaha_YFZ.jpg')}}" />
                </div>
              </div>
            </div>
          </div>
        </section>
        <section
          class="section border-img-bottom border-img-bottom--whiteOff border-img--jaw"
        >
          <div class="container-extra-large">
            <div class="fly-elements bg-backpack-right">
              <div class="fly-elements__item">
                {{-- <picture>
                  <source
                    data-srcset="https://backpacking-tours.imgix.net/images/tmp/beach-rock-jump.jpg?w=390&h=270&crop=faces&q=75&auto=format&fm=png"
                    media="(max-width: 420px)"
                  />
                  <source
                    data-srcset="https://backpacking-tours.imgix.net/images/tmp/beach-rock-jump.jpg?w=720&h=490&crop=faces&q=75&auto=format&fm=png"
                    media="(max-width: 768px)"
                  />
                  <source
                    data-srcset="https://backpacking-tours.imgix.net/images/tmp/beach-rock-jump.jpg?w=470&h=340&crop=faces&q=75&auto=format&fm=png"
                    media="(max-width: 1440px)"
                  />
                  <img
                    class="fly-elements__photo lazy"
                    data-src="https://backpacking-tours.imgix.net/images/tmp/beach-rock-jump.jpg?w=620&h=440&crop=faces&q=75&auto=format&fm=png"
                    width="2500"
                    height="1667"
                    alt=""
                  />
                </picture> --}}
              </div>
              <div class="fly-elements__item fly-elements__item--circled">
                <div class="circle circle--orange">
                  <svg
                    class="circle__svg circle__svg--orange"
                    id="circle-orange"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 413.808 194.818"
                  >
                    <path
                      id="Path_390"
                      data-name="Path 390"
                      d="M-14227.713,4383.438s-123.527,23.8-110.222-201.043,120.478-156.715,129.463-151.667,57.358,20.173,45.235,200.393c-5.8,86.325-33.748,90.077-54.317,117.017-22.226,29.108-36.328,56.439-38.849,74.921"
                      transform="translate(-4507.233 -13996.752) rotate(-92)"
                      fill="none"
                      stroke="#FFC132"
                      stroke-width="3"
                    />
                  </svg>
                  <p class="circle__text circle__text--pos-1">
                    Book with spread payments
                  </p>
                </div>
              </div>
              <div class="fly-elements__item fly-elements__item--circled">
                <div class="circle circle--blue circle--bt-lg">
                  <svg
                    class="circle__svg circle__svg--blue"
                    id="circle-blue"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 352.494 174.443"
                  >
                    <path
                      id="Path_389"
                      data-name="Path 389"
                      d="M-12927.428,3656.919s-130.209,8.949-152.374,51.9-13.343,67.706,6.34,86.322,60.453,37.69,166.963,32.289,148.719-26.519,159.068-54.121,1.979-78.218-34.775-88.658-117.82-20.336-170.39-8.35"
                      transform="translate(-12741.824 3829.863) rotate(180)"
                      fill="none"
                      stroke="#36e0dc"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="3"
                    />
                  </svg>
                  <p class="circle__text circle__text--rotate-1">
                    Sleep &amp; travel in comfort
                  </p>
                </div>
              </div>
              <div class="fly-elements__item fly-elements__item--circled">
                <div class="circle circle--green circle--bt-sm">
                  <svg
                    class="circle__svg circle__svg--green"
                    id="circle-green"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 336.716 197.956"
                  >
                    <path
                      id="Path_388"
                      data-name="Path 388"
                      d="M-14130.036,4193.739s-232.008,11.473-207.02-96.921,226.282-75.551,243.156-73.118,107.735,9.725,84.966,96.608c-10.907,41.616-63.39,43.425-102.021,56.413-41.743,14.033-68.23,27.208-72.965,36.119"
                      transform="translate(14340.465 -4015.586)"
                      fill="none"
                      stroke="#0fba68"
                      stroke-width="3"
                    />
                  </svg>
                  <p class="circle__text">Local, English speaking guides</p>
                </div>
              </div>
              <div class="fly-elements__item animation-fadeInUp">
                <div class="card card--shadow-purple bg-white">
                  <div class="card__content">
                    <div class="headline-wave">
                      <h3 class="headline-3 text-upper">About Quads Dubai</h3>
                      <svg width="100px" height="16px" class="stroke-purple">
                        <use
                          xlink:href="images/icons.svg#icon-wave-squiggle"
                        />
                      </svg>
                    </div>
                    <p>
                      We started off in 2013 with a 21-day Thailand tour.
                      Today, we offer tours in Thailand, Vietnam, Cambodia,
                      Bali, and Sri Lanka with plans to add exciting new tours
                      each year! 
                    </p>
                    <a
                      class="btn btn--black"
                      href="about.html"
                      title="Meet The Team"
                    >
                      Meet The Team
                    </a>
                  </div>
                </div>
              </div>
              <div class="fly-elements__item">
              </div>
              <div class="fly-elements__item fly-elements__item--circled">
                <div class="circle circle--blurple">
                  <svg
                    class="circle__svg circle__svg--blurple"
                    id="circle-blurple"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 310.56 187.691"
                  >
                    <path
                      id="Path_387"
                      data-name="Path 387"
                      d="M-13469.2,4258.492s-159.661,45.118-138.472,120.245,156.841,67.376,195.889,59.847,134.482-41.5,103.52-129.467-193.671-29.285-193.671-29.285"
                      transform="translate(13611.119 -4256.993)"
                      fill="none"
                      stroke="#f94171"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="3"
                    />
                  </svg>
                  <p class="circle__text circle__text--rotate-2">
                    Fully licensed tour operator
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="section mt-20em bg-white-top-jaw">
          <div class="section__wrapper">
            <div class="overlay"></div>
            <div class="headline-wave headline-wave--center">
              <h2 class="headline-3">Popular Tours</h2>
              <svg width="100px" height="16px" class="stroke-orange">
                <use xlink:href="{{asset ('assets/front/images/icons.svg#icon-jaw-squiggle')}}" />
              </svg>
            </div>
            <div class="row row--g-10 row--hidden-overflow mt-20em">
              <div class="col-lg-12 col-xxl-10 offset-xxl-1">
                <div class="row row--g-20">
                  <div class="col-lg-4 animation-fadeInUp animation-delay-0">
                    <a
                      class="card card--flex card--shadow-orange"
                      href="blog/vaccines-to-travel-to-thailand.html"
                      title="Vaccines to travel to Thailand"
                    >

                      <img src="{{asset ('assets/front/images/sand-skiing.jpg')}}" />

                      <div class="card__content card__content--with-footer">
                        <div>
                          <p class="headline-5 color-orange">Dubai</p>
                          <div class="headline-wave">
                            <h4 class="headline-4">Dune Buggies</h4>
                            <svg
                              width="100px"
                              height="16px"
                              class="stroke-orange"
                            >
                              <use
                                xlink:href="{{asset ('assets/front/images/icons.svg#icon-wave-squiggle')}}"
                              />
                            </svg>
                          </div>
                          <div class="content mt-10em">
                            Contact your local GP or hospital to make an
                            appointment as soon as possible. Ideally at least
                            four weeks before you leave. Your local GP or
                            hospital will have your vaccine history and advice
                            you on what you will need to take.
                          </div>
                        </div>
                        <div class="card__footer">
                          <div>
                            <span class="chip chip--orange"
                              >General Info</span
                            >
                          </div>
                          <span class="btn-link">Read More</span>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-4 animation-fadeInUp animation-delay-1">
                    <a
                      class="card card--flex card--shadow-blue"
                      href="blog/vaccines-to-travel-to-vietnam.html"
                      title="Vaccines to travel to Vietnam"
                    >
                      <!--- <div
                        class="card__image lazy"
                        id="recent-article_11669719281"
                        data-name="recent-article_11669719281"
                        data-style="    @media screen and (max-width:420px) {  #recent-article_11669719281 {  background-image: url('https://backpacking-tours.imgix.net/storage/uploads/blog/all/vaccines/travelvaccine_jmqqi.jpg?w=360&h=340&crop=faces&q=75&auto=format&fm=png')  } }    @media screen and (min-width:421px) and (max-width:768px) {  #recent-article_11669719281 {  background-image: url('https://backpacking-tours.imgix.net/storage/uploads/blog/all/vaccines/travelvaccine_jmqqi.jpg?w=750&h=400&crop=faces&q=75&auto=format&fm=png')  } }    @media screen and (min-width:769px) and (max-width:1440px) {  #recent-article_11669719281 {  background-image: url('https://backpacking-tours.imgix.net/storage/uploads/blog/all/vaccines/travelvaccine_jmqqi.jpg?w=470&h=270&crop=faces&q=75&auto=format&fm=png')  } }    @media screen and (min-width:1441px) {  #recent-article_11669719281 {  background-image: url('https://backpacking-tours.imgix.net/storage/uploads/blog/all/vaccines/travelvaccine_jmqqi.jpg?w=470&h=270&crop=faces&q=75&auto=format&fm=png')  } }   "
                      ></div>-->
                      <img src="{{asset ('assets/front/images/sand-skiing.jpg')}}" />
                      <div class="card__content card__content--with-footer">
                        <div>
                          <p class="headline-5 color-blue">Dubai</p>
                          <div class="headline-wave">
                            <h4 class="headline-4">Jet Skis</h4>
                            <svg
                              width="100px"
                              height="16px"
                              class="stroke-blue"
                            >
                              <use
                                xlink:href="{{asset ('assets/front/images/icons.svg#icon-wave-squiggle')}}"
                              />
                            </svg>
                          </div>
                          <div class="content mt-10em">
                            Contact your local GP or hospital to make an
                            appointment as soon as possible. Ideally at least
                            four weeks before you leave. Your local GP or
                            hospital will have your vaccine history and advice
                            you on what you will need to take.
                          </div>
                        </div>
                        <div class="card__footer">
                          <div>
                            <span class="chip chip--blue">General Info</span>
                          </div>
                          <span class="btn-link">Read More</span>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-4 animation-fadeInUp animation-delay-2">
                    <a
                      class="card card--flex card--shadow-orange"
                      href="blog/thailand-booking-flights-airport-transfer.html"
                      title="Thailand: Booking Flights &amp; Airport Transfer"
                    >
                      <!--<div
                        class="card__image lazy"
                        id="recent-article_21669719281"
                        data-name="recent-article_21669719281"
                        data-style="    @media screen and (max-width:420px) {  #recent-article_21669719281 {  background-image: url('https://backpacking-tours.imgix.net/storage/uploads/blog/thailand/Flights/thailand-arrival-airport_whmze.jpg?w=360&h=340&crop=faces&q=75&auto=format&fm=png')  } }    @media screen and (min-width:421px) and (max-width:768px) {  #recent-article_21669719281 {  background-image: url('https://backpacking-tours.imgix.net/storage/uploads/blog/thailand/Flights/thailand-arrival-airport_whmze.jpg?w=750&h=400&crop=faces&q=75&auto=format&fm=png')  } }    @media screen and (min-width:769px) and (max-width:1440px) {  #recent-article_21669719281 {  background-image: url('https://backpacking-tours.imgix.net/storage/uploads/blog/thailand/Flights/thailand-arrival-airport_whmze.jpg?w=470&h=270&crop=faces&q=75&auto=format&fm=png')  } }    @media screen and (min-width:1441px) {  #recent-article_21669719281 {  background-image: url('https://backpacking-tours.imgix.net/storage/uploads/blog/thailand/Flights/thailand-arrival-airport_whmze.jpg?w=470&h=270&crop=faces&q=75&auto=format&fm=png')  } }   "
                      ></div>-->
                      <img src="{{asset ('assets/front/images/sandpitimage.jpg')}}" />
                      <div class="card__content card__content--with-footer">
                        <div>
                          <p class="headline-5 color-orange">Dubai</p>
                          <div class="headline-wave">
                            <h4 class="headline-4">Desert Sufari</h4>
                            <svg
                              width="100px"
                              height="16px"
                              class="stroke-orange"
                            >
                              <use
                                xlink:href="{{asset ('assets/front/images/icons.svg#icon-wave-squiggle')}}"
                              />
                            </svg>
                          </div>
                          <div class="content mt-10em">
                            Your airport transfers are included. How to
                            arrange your flights and what to expect on your
                            Thailand tour - All your answers are here.
                          </div>
                        </div>
                        <div class="card__footer">
                          <div>
                            <span class="chip chip--orange">Flights</span>
                          </div>
                          <span class="btn-link">Read More</span>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
                <p class="text-center">
                  <a
                    href="blog.html"
                    class="btn btn--black"
                    title="See All Articles"
                    >See All Popular Tours</a
                  >
                </p>
              </div>
            </div>
          </div>
        </section>
      </main>
    </div>
  </div>
@endsection